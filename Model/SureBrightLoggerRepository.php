<?php
namespace Vendor\Module\Model;

use Vendor\Module\Api\SureBrightLoggerInterface;
use Vendor\Module\Model\ResourceModel\SureBrightLogger\CollectionFactory;
use Magento\Framework\Api\SearchResultsInterfaceFactory;

class SureBrightLoggerRepository implements SureBrightLoggerInterface
{
    protected $collectionFactory;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    public function getLogs()
    {
        $collection = $this->collectionFactory->create();
        return $collection->getData();
    }
}
