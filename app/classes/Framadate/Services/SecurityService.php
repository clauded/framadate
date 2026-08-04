<?php
declare(strict_types=1);
namespace Framadate\Services;

use Framadate\Security\PasswordHasher;
use Framadate\Security\Token;

class SecurityService {
    /**
     * Get a CSRF token by name, or (re)create it.
     *
     * It creates a new token if :
     * <ul>
     *  <li>There no token with the given name in session</li>
     *  <li>The token time is in past</li>
     * </ul>
     *
     * @param $tokan_name string The name of the CSRF token
     * @return string The token
     */
    public function getToken(string $tokan_name): string
    {
        if (!isset($_SESSION['tokens'])) {
            $_SESSION['tokens'] = [];
        }
        if (!isset($_SESSION['tokens'][$tokan_name]) || $_SESSION['tokens'][$tokan_name]->isGone()) {
            $_SESSION['tokens'][$tokan_name] = new Token();
        }

        return $_SESSION['tokens'][$tokan_name]->getValue();
    }

    /**
     * Check if a given value is corresponding to the token in session.
     *
     * @param $tokan_name string Name of the token
     * @param $csrf string Value to check
     * @return bool true if the token is well checked
     */
    public function checkCsrf(string $tokan_name, string $csrf): bool
    {
        if (!isset($_SESSION['tokens'][$tokan_name])) {
            return false;
        }

        $checked = $_SESSION['tokens'][$tokan_name]->getValue() === $csrf;

        if($checked) {
            unset($_SESSION['tokens'][$tokan_name]);
        }

        return $checked;
    }

    /**
     * Verify if the current session allows to access given poll.
     *
     * @param $poll \stdClass The poll which we seek access
     * @return bool true if the current session can access this poll
     */
    public function canAccessPoll($poll): bool
    {
        if (is_null($poll->password_hash)) {
            return true;
        }

        $this->ensureSessionPollSecurityIsCreated();

        if (!empty($_SESSION['poll_security'][$poll->id])) {
            return true;
        }

        return false;
    }

    /**
     * Submit to the session a poll password.
     *
     * The password is verified immediately against the poll's stored hash;
     * only a boolean "access granted" flag is kept in session, never the
     * plaintext password itself.
     *
     * @param $poll \stdClass The poll which we seek access
     * @param $password string the password to compare
     */
    public function submitPollAccess($poll, string $password): void
    {
        if (!empty($password) && PasswordHasher::verify($password, $poll->password_hash)) {
            $this->ensureSessionPollSecurityIsCreated();
            $_SESSION['poll_security'][$poll->id] = true;
        }
    }

    private function ensureSessionPollSecurityIsCreated(): void
    {
        if (!isset($_SESSION['poll_security'])) {
            $_SESSION['poll_security'] = [];
        }
    }
}
