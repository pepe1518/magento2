<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Update\Queue;

class Writer extends Reader
{
    /**
     * Write JSON string to job queue
     *
     * @param string $data
     * @return bool|int
     * @throw \RuntimeException
     */
    public function write($data)
    {
        if (file_exists($this->queueFilePath)) {
            json_decode($data);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \RuntimeException(sprintf('Content to write must be a valid JSON.'));
            }
            return file_put_contents($this->queueFilePath, $data);
        }
        return false;
    }
}
