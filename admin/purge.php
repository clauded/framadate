<?php
declare(strict_types=1);

use Framadate\Services\InputService;
use Framadate\Services\LogService;
use Framadate\Services\PurgeService;
use Framadate\Services\SecurityService;

include_once __DIR__ . '/../app/inc/init.php';
include_once __DIR__ . '/../bandeaux.php';

/* Variables */
$message = null;

/* Services */
$logService = new LogService();
$purgeService = new PurgeService($logService);
$securityService = new SecurityService();
$inputService = new InputService();

/* Post */
$action = $inputService->filterName($_POST['action'] ?? null);

/* Page */
if ($action === 'purge' && $securityService->checkCsrf('admin', $_POST['csrf'])) {
    $count = $purgeService->purgeOldPolls();
    $message = __('Admin', 'Purged:') . ' ' . $count;
}

// Assign data to template
$smarty->assign('message', $message);
$smarty->assign('crsf', $securityService->getToken('admin'));
$smarty->assign('title', __('Admin', 'Purge'));
$smarty->display('admin/purge.tpl');
