<?php
declare(strict_types=1);
namespace Framadate\Services;

/**
 * This service provides a standard way to log some informations.
 *
 * @package Framadate\Services
 */
class LogService {
    /**
     * Log a message to the log file.
     *
     * @param $tag string A tag is used to quickly found a message when reading log file
     * @param $message string some message
     */
    public function log(string $tag, string $message): void
    {
        error_log(date('Ymd His') . ' [' . $tag . '] ' . $message . "\n", 3, ROOT_DIR . LOG_FILE);
    }
}
