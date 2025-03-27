<?php
namespace Surebright\Integration\Model\ResourceModel\SureBrightLogger;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \Surebright\Integration\Model\SureBrightLogger::class,
            \Surebright\Integration\Model\ResourceModel\SureBrightLogger::class
        );
    }
}
