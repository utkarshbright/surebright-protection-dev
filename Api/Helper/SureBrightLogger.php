<?php
namespace Surebright\Integration\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Surebright\Integration\Model\SureBrightLoggerFactory;

class SureBrightLogger extends AbstractHelper
{
    protected $loggerFactory;

    public function __construct(Context $context, SureBrightLoggerFactory $loggerFactory)
    {
        parent::__construct($context);
        $this->loggerFactory = $loggerFactory;
    }

    public function log($message, $context = null)
    {
        $log = $this->loggerFactory->create();
        $log->setData([
            'message' => $message,
            'context' => $context ? json_encode($context) : null
        ]);
        $log->save();
    }

    public function logInstallationStep($step, $status, $details = null)
    {
        $this->log("Installation Step: $step", [
            'status' => $status,
            'details' => $details
        ]);
    }
}
