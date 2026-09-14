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

$checkWP = true;

// check if the page was called from within wordpress
if ($checkWP) {
	// Always start the PHP session before outputting anything
	if (session_status() === PHP_SESSION_NONE) {
		session_set_cookie_params([
			'lifetime' => 0,
			'path'     => '/',
			'samesite' => 'Lax',
			'secure'   => true,
			'httponly' => true,
		]);
		session_start();
	}

	$isAuthorized = false;
	$secretKey = 'z[NYHyJKHZd-r\mzPtCJe!,O'; // Must match WordPress secret key

	// 1. Internal Link Navigation Check (Active Session)
	if (!empty($_SESSION['iframe_authorized']) && $_SESSION['iframe_authorized'] === true) {
		$isAuthorized = true;
	}
	// 2. Initial Handshake Check (WordPress Cookie)
	elseif (!empty($_COOKIE['wp_iframe_auth'])) {
		$parts = explode('.', $_COOKIE['wp_iframe_auth']);
		
		if (count($parts) === 2) {
			$expiry = (string) $parts[0];
			$receivedSignature = $parts[1];
			
			// Verify HMAC signature & expiration
			$expectedSignature = hash_hmac('sha256', $expiry, $secretKey);

			if (hash_equals($expectedSignature, $receivedSignature) && time() <= $expiry) {
				$isAuthorized = true;
				$_SESSION['iframe_authorized'] = true; // Upgrade to full session

				// Clear the validation cookie immediately so it cannot be reused
				setcookie('wp_iframe_auth', '', time() - 3600, '/');
			}
		}
	}

	// Block access if both checks fail
	if (!$isAuthorized) {
		header('HTTP/1.1 403 Forbidden');
		echo '<h1>403 Accès refusé</h1>';
		echo '<p>Accès direct non autorisé ou votre session est expirée. <a href="#" onclick="window.parent.location.reload(); return false;">Cliquez ici pour recharger la page</a>.</p>';
		exit;
	}
	
	// Security headers
	header("Content-Security-Policy: frame-ancestors 'self'");
	header("X-Frame-Options: SAMEORIGIN");

}