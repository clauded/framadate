<?php
declare(strict_types=1);
/**
 * This software is governed by the CeCILL-B license. If a copy of this license
 * is not distributed with this file, you can obtain one at
 * http://www.cecill.info/licences/Licence_CeCILL-B_V1-en.txt
 *
 * Authors of STUdS (initial project): Guilhem BORGHESI (borghesi@unistra.fr) and Raphaël DROZ
 * Authors of Framadate/OpenSondage: Framasoft (https://github.com/framasoft)
 *
 * =============================
 *
 * Ce logiciel est régi par la licence CeCILL-B. Si une copie de cette licence
 * ne se trouve pas avec ce fichier vous pouvez l'obtenir sur
 * http://www.cecill.info/licences/Licence_CeCILL-B_V1-fr.txt
 *
 * Auteurs de STUdS (projet initial) : Guilhem BORGHESI (borghesi@unistra.fr) et Raphaël DROZ
 * Auteurs de Framadate/OpenSondage : Framasoft (https://github.com/framasoft)
 */

/**
 * Restricts access to requests coming from within the WordPress site, by way of
 * a short-lived HMAC-signed handshake cookie set by WordPress, which is then
 * upgraded to a normal PHP session for subsequent navigation.
 *
 * Configuration (in app/inc/config.php, which is NOT tracked in git):
 *   const WP_IFRAME_CHECK  = true;        // enable/disable the gate
 *   const WP_IFRAME_SECRET = '<secret>';  // must match the WordPress side
 *
 * The secret MUST live in config.php (or the environment) and never in this
 * file, because this file is tracked in git. Anyone who can read the secret can
 * forge a valid handshake cookie and bypass the gate entirely.
 */
function framadate_wordpress_gate(): void
{
    // Never gate CLI usage (migrations, cron, tooling).
    if (PHP_SAPI === 'cli') {
        return;
    }

    // Disabled unless explicitly turned on in config.
    if (!defined('WP_IFRAME_CHECK') || WP_IFRAME_CHECK !== true) {
        return;
    }

    // Some entry points must stay reachable regardless, otherwise the site can
    // become impossible to install, migrate or recover.
    $script = basename($_SERVER['SCRIPT_NAME'] ?? '');
    $always_allowed = ['install.php', 'migration.php', 'maintenance.php'];
    if (in_array($script, $always_allowed, true)) {
        return;
    }

    // Without a configured secret the check cannot be performed. Fail closed:
    // an unconfigured gate that silently allowed everything would give a false
    // sense of protection.
    if (!defined('WP_IFRAME_SECRET') || WP_IFRAME_SECRET === '') {
        framadate_wordpress_deny();
    }

    $secure = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';

    if (session_status() === PHP_SESSION_NONE) {
        session_set_cookie_params([
            'lifetime' => 0,
            'path'     => '/',
            'samesite' => 'Lax',
            // Only force the Secure flag when actually served over HTTPS,
            // otherwise the session cookie is silently dropped on plain HTTP
            // and every request would look unauthenticated.
            'secure'   => $secure,
            'httponly' => true,
        ]);
        session_start();
    }

    // 1. Already-established session (internal link navigation).
    if (!empty($_SESSION['iframe_authorized'])) {
        framadate_wordpress_headers();
        return;
    }

    // 2. Initial handshake via the signed cookie set by WordPress.
    if (!empty($_COOKIE['wp_iframe_auth'])) {
        $parts = explode('.', (string) $_COOKIE['wp_iframe_auth']);

        if (count($parts) === 2) {
            [$expiry, $receivedSignature] = $parts;

            $expectedSignature = hash_hmac('sha256', $expiry, WP_IFRAME_SECRET);

            if (hash_equals($expectedSignature, $receivedSignature)
                && ctype_digit($expiry)
                && time() <= (int) $expiry
            ) {
                // Upgrade to a full session, rotating the session id so the
                // handshake cannot be used to fixate a known session.
                session_regenerate_id(true);
                $_SESSION['iframe_authorized'] = true;

                // Clear the handshake cookie so it cannot be replayed.
                setcookie('wp_iframe_auth', '', [
                    'expires'  => time() - 3600,
                    'path'     => '/',
                    'samesite' => 'Lax',
                    'secure'   => $secure,
                    'httponly' => true,
                ]);

                framadate_wordpress_headers();
                return;
            }
        }
    }

    framadate_wordpress_deny();
}

function framadate_wordpress_headers(): void
{
    header("Content-Security-Policy: frame-ancestors 'self'");
    header('X-Frame-Options: SAMEORIGIN');
}

function framadate_wordpress_deny(): void
{
    header('HTTP/1.1 403 Forbidden');
    header('Content-Type: text/html; charset=UTF-8');

    // Use the application's translations when they are available. This runs in
    // a security path, and __() can throw (CantLoadDictionaryException) if the
    // dictionary cannot be loaded, so fall back to English rather than let an
    // uncaught exception replace the 403 with a stack trace.
    $title = '403 Forbidden';
    $body = 'Direct access is not permitted or your session has expired (try refreshing the page).';
    if (function_exists('__')) {
        try {
            $title = __('wordpress', '403 Forbidden');
            $body = __('wordpress', 'Direct access is not permitted or your session has expired (try refreshing the page).');
        } catch (\Throwable $e) {
            // Keep the English defaults.
        }
    }

    echo '<h1>' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '</h1>';
    echo '<p>' . htmlspecialchars($body, ENT_QUOTES, 'UTF-8') . '</p>';
    exit;
}
