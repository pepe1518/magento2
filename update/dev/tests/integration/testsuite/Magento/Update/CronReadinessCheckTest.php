<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Update;

class CronReadinessCheckTest extends \PHPUnit_Framework_TestCase
{
    static public $writable = true;

    public function tearDown()
    {
        unlink(__DIR__ . '/_files/readiness_check');
    }

    public function testRunReadinessCheckNotWritable()
    {
        $cronReadinessCheck = new CronReadinessCheck();
        self::$writable = false;
        $this->assertFalse($cronReadinessCheck->runReadinessCheck());
        $file = fopen(__DIR__ . '/_files/readiness_check', 'r');
        $data = fread($file, filesize(__DIR__ . '/_files/readiness_check'));
        $json = json_decode($data, true);
        $expected = [
            CronReadinessCheck::KEY_READINESS_CHECKS => [
                CronReadinessCheck::KEY_FILE_PERMISSIONS_VERIFIED => false,
            ],
            CronReadinessCheck::KEY_LAST_TIMESTAMP => 150,
            CronReadinessCheck::KEY_CURRENT_TIMESTAMP => 200,
        ];
        $errorMessage = $json[CronReadinessCheck::KEY_READINESS_CHECKS]['error'];
        unset($json[CronReadinessCheck::KEY_READINESS_CHECKS]['error']);
        $this->assertEquals($expected, $json);
        $this->assertContains('Found non-writable path(s):<br/>', $errorMessage);
    }

    public function testRunReadinessCheck()
    {
        $cronReadinessCheck = new CronReadinessCheck();
        self::$writable = true;
        $this->assertTrue($cronReadinessCheck->runReadinessCheck());
        $file = fopen(__DIR__ . '/_files/readiness_check', 'r');
        $data = fread($file, filesize(__DIR__ . '/_files/readiness_check'));
        $json = json_decode($data, true);
        $expected = [
            CronReadinessCheck::KEY_READINESS_CHECKS => [CronReadinessCheck::KEY_FILE_PERMISSIONS_VERIFIED => true],
            CronReadinessCheck::KEY_LAST_TIMESTAMP => 150,
            CronReadinessCheck::KEY_CURRENT_TIMESTAMP => 200,
        ];
        sort($expected);
        sort($json);
        $this->assertEquals($expected, $json);
    }
}

function time()
{
    return 200;
}

function file_put_contents($filename, $data)
{
    $file = fopen(__DIR__ . '/_files/readiness_check', 'w+');
    fwrite($file, $data);
    fclose($file);
}

function file_exists($filename)
{
    return true;
}

function file_get_contents()
{
    return json_encode([CronReadinessCheck::KEY_CURRENT_TIMESTAMP => 150]);
}

function is_writable()
{
    return CronReadinessCheckTest::$writable;
}
