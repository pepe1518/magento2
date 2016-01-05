<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

error_reporting(E_ALL);

define('UPDATER_BP', realpath(__DIR__ . '/../'));
define('MAGENTO_BP', realpath(__DIR__ . '/../../'));
define('BACKUP_DIR', MAGENTO_BP . '/var/backups/');

require_once UPDATER_BP . '/vendor/autoload.php';
