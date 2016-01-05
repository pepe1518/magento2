<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

require_once __DIR__ . '/app/bootstrap.php';

$status = new \Magento\Update\Status();
$cronReadinessChecker = new \Magento\Update\CronReadinessCheck();

if (!$cronReadinessChecker->runReadinessCheck()) {
    exit('Cron readiness check failed');
}

if ($status->isUpdateInProgress()) {
    exit('Cron is already in progress...');
}

if ($status->isUpdateError()) {
    exit('There was an error in previous Updater jobs...');
}

$backupDirectory = BACKUP_DIR;
if (!file_exists($backupDirectory)) {
    if (!mkdir($backupDirectory)) {
        $status->add(sprintf('Backup directory "%s" cannot be created.', $backupDirectory));
        exit();
    }
    chmod($backupDirectory, 0770);
}

try {
    $status->setUpdateInProgress();
} catch (\RuntimeException $e) {
    $status->add($e->getMessage());
    exit();
}

$jobQueue = new \Magento\Update\Queue();

try {
    while (!empty($jobQueue->peek()) &&
        strpos($jobQueue->peek()[\Magento\Update\Queue::KEY_JOB_NAME], 'setup:') === false
    ) {
        $job = $jobQueue->popQueuedJob();
        $status->add(
            sprintf('Job "%s" has been started', $job)
        );
        try {
            $job->execute();
            $status->add(sprintf('Job "%s" has successfully completed', $job));
        } catch (\Exception $e) {
            $status->setUpdateError();
            $status->add(
                sprintf('An error occurred while executing job "%s": %s', $job, $e->getMessage())
            );
            $status->setUpdateInProgress(false);
        };
    }
} catch (\Exception $e) {
    $status->setUpdateError();
    $status->add($e->getMessage());
} finally {
    $status->setUpdateInProgress(false);
}
