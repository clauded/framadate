<?php
declare(strict_types=1);

use Framadate\Services\InputService;
use Framadate\Services\LogService;
use Framadate\Services\AdminPollService;
use Framadate\Services\PollService;
use Framadate\Services\SecurityService;
use Framadate\Utils;

include_once __DIR__ . '/../app/inc/init.php';

// 1. Retrieve command line arguments
$admin_poll_id = $argv[1] ?? null;
$csv_filename  = $argv[2] ?? null;

// Terminal output helper with color support
function print_message(string $type, string $text): void {
    if ($type === 'success') {
        echo "\033[32m[SUCCESS]\033[0m " . $text . PHP_EOL;
    } else {
        echo "\033[31m[DANGER]\033[0m " . $text . PHP_EOL;
    }
}

// 2. Validate arguments presence
if (empty($admin_poll_id) || empty($csv_filename)) {
    print_message('danger', 'Usage: php ' . basename(__FILE__) . ' <admin_poll_id> <csv_output_file>');
    exit(1);
}

// Globals
global $connect;
global $date_format;

// Services
$logService       = new LogService();
$pollService      = new PollService($logService);
$adminPollService = new AdminPollService($connect, $pollService, $logService);
$securityService  = new SecurityService();
$inputService     = new InputService();

// 3. Filter and validate input format
$admin_poll_id = $inputService->filterId($admin_poll_id);

if (!$admin_poll_id) {
    print_message('danger', 'Invalid admin_poll_id format.');
    exit(1);
}

// 4. Verify that a poll exists with this admin_poll_id
$poll = $pollService->findByAdminId($admin_poll_id);

if (!$poll) {
    print_message('danger', sprintf(__('Error', 'This poll doesn\'t exist !') . ' (%s)', $admin_poll_id));

    exit(1);
}

// 5. Generate CSV Content
$slots = $pollService->allSlotsByPoll($poll);
$votes = $pollService->allVotesByPollId($poll->id);
$vote_count = count($votes);

$csv_buffer = '';

// CSV Header
if ($poll->format === 'D') {
    $titles_line = ',';
    $moments_line = ',';
    foreach ($slots as $slot) {
        $title = Utils::csvEscape(formatDate($date_format['txt_date'], $slot->title));
        $moments = explode(',', $slot->moments);

        $titles_line .= str_repeat($title . ',', count($moments));
        $moments_line .= implode(',', array_map('\Framadate\Utils::csvEscape', $moments)) . ',';
    }
    $csv_buffer .= $titles_line . "\r\n";
    $csv_buffer .= $moments_line . "\r\n";
} else {
    $csv_buffer .= ',';
    foreach ($slots as $slot) {
        $csv_buffer .= Utils::csvEscape(Utils::markdown($slot->title, true)) . ',';
    }
    $csv_buffer .= "\r\n";
}

// Vote lines
foreach ($votes as $vote) {
    $csv_buffer .= Utils::csvEscape($vote->name) . ',';
    $choices = str_split($vote->choices);
    foreach ($choices as $choice) {
        $text = match ((int) $choice) {
            0 => __('Generic', 'No'),
            1 => __('Generic', 'Ifneedbe'),
            2 => __('Generic', 'Yes'),
            default => __('Generic', 'Unknown'),
        };
        $csv_buffer .= Utils::csvEscape($text) . ',';
    }
    $csv_buffer .= "\r\n";
}

// 6. Write CSV Buffer to File
if (file_put_contents($csv_filename, $csv_buffer) === false) {
    print_message('danger', sprintf('Failed to write CSV export to file "%s". Deletion aborted.', $csv_filename));
    exit(1);
}
print_message('success', sprintf('Exported %d vote(s) to "%s".', $vote_count, $csv_filename));

// 7. Perform the vote deletion action
if ($adminPollService->cleanVotes($poll->id)) {
    print_message('success', sprintf(__('adminstuds', 'All votes deleted') . ' (Poll ID: %s)', $poll->id));
    exit(0);
} else {
    print_message('danger', __('Error', 'Failed to delete all votes'));
    exit(1);
}