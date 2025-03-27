<?php
namespace Surebright\Integration\Model;

use Magento\Framework\Model\AbstractModel;

class SureBrightLogger extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Surebright\Integration\Model\ResourceModel\SureBrightLogger::class);
    }
}
