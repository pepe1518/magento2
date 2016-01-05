<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Update\Queue;

class WriterTest extends ReaderTest
{
    public function testWrite()
    {
        $writer = new \Magento\Update\Queue\Writer($this->validQueueFilePath);
        $writer->write('{"jobs": []}');
        $expectedQueueFileContent = file_get_contents($this->validQueueFilePath);
        $this->assertEquals($expectedQueueFileContent, $writer->read());
    }

    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Content to write must be a valid JSON.
     */
    public function testWriteInvalidJson()
    {
        $writer = new \Magento\Update\Queue\Writer($this->validQueueFilePath);
        $writer->write('invalid json string');
    }

    public function testWriteFileDoesNotExist()
    {
        $invalidFilePath = 'invalidpath';
        $writer = new \Magento\Update\Queue\Writer($invalidFilePath);
        $this->assertFalse($writer->write('{jobs: []}'));
    }
}
