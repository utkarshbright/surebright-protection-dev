<?php
namespace Vendor\Module\Api;

interface SureBrightLoggerInterface
{
    /**
     * Get logs
     * @return \Vendor\Module\Api\Data\LogInterface[]
     */
    public function getLogs();
}
