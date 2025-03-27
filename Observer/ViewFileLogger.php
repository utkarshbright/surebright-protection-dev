<?php
namespace Surebright\Integration\Observer;
      
use Magento\Framework\Event\ObserverInterface;
use Surebright\Integration\Helper\SureBrightLogger;

class ViewFileLogger implements ObserverInterface
{
    protected $logger;

    public function __construct(SureBrightLogger $logger)
    {
        $this->logger = $logger;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $theme = $observer->getData('theme');
        $this->logger->logInstallationStep('View File Check', 'Checking', 'Theme: ' . $theme->getCode());
    }
}
