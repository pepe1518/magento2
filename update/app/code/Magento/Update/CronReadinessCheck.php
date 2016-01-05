<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Update;

/**
 * This class is used by Updater cron script to check if it can be run properly
 */
class CronReadinessCheck
{
    /**
     * Basename to Updater status file
     */
    const CRON_JOB_STATUS_FILE = '.update_cronjob_status';

    /**#@+
     * Keys used in status file
     */
    const KEY_READINESS_CHECKS = 'readiness_checks';
    const KEY_FILE_PERMISSIONS_VERIFIED = 'file_permissions_verified';
    const KEY_ERROR = 'error';
    const KEY_CURRENT_TIMESTAMP = 'current_timestamp';
    const KEY_LAST_TIMESTAMP = 'last_timestamp';
    /**#@-*/

    /**
     * Run Cron job readiness check
     *
     * @return bool
     */
    public function runReadinessCheck()
    {
        $resultJsonRawData = ['readiness_checks' => []];
        $success = true;

        $nonWritablePaths = $this->checkPermissionsRecursively();

        if (!empty($nonWritablePaths)) {
            $resultJsonRawData[self::KEY_READINESS_CHECKS][self::KEY_FILE_PERMISSIONS_VERIFIED] = false;
            $resultJsonRawData[self::KEY_READINESS_CHECKS][self::KEY_ERROR] =
                'Found non-writable path(s):<br/>' . implode('<br/>', $nonWritablePaths);
            $success = false;
        } else {
            $resultJsonRawData[self::KEY_READINESS_CHECKS][self::KEY_FILE_PERMISSIONS_VERIFIED] = true;
        }

        if (file_exists(MAGENTO_BP . '/var/' . self::CRON_JOB_STATUS_FILE)) {
            $jsonData = json_decode(file_get_contents(MAGENTO_BP . '/var/' . self::CRON_JOB_STATUS_FILE), true);
            if (isset($jsonData[self::KEY_CURRENT_TIMESTAMP])) {
                $resultJsonRawData[self::KEY_LAST_TIMESTAMP] = $jsonData[self::KEY_CURRENT_TIMESTAMP];
            }
        }
        $resultJsonRawData[self::KEY_CURRENT_TIMESTAMP] = time();

        $resultJson = json_encode($resultJsonRawData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        file_put_contents(MAGENTO_BP . '/var/' . self::CRON_JOB_STATUS_FILE, $resultJson);

        return $success;
    }

    /**
     * Check file permissions recursively
     *
     * @return string[]
     */
    private function checkPermissionsRecursively()
    {
        $nonWritablePaths = [];
        $filesystemIterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator(MAGENTO_BP),
            \RecursiveIteratorIterator::SELF_FIRST
        );
        $filesystemIterator = new ExcludeFilter(
            $filesystemIterator,
            [
                MAGENTO_BP . '/update',
                MAGENTO_BP . '/var/session',
                '.git',
                '.idea'
            ]
        );
        foreach ($filesystemIterator as $item) {
            $path = $item->__toString();
            if (!is_writable($path)) {
                $nonWritablePaths[] = $path;
            }
        }
        return $nonWritablePaths;
    }
}
