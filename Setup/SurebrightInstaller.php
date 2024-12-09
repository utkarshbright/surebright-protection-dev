<?php
namespace Surebright\Integration\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Integration\Model\ConfigBasedIntegrationManager;
use Magento\Framework\Setup\InstallDataInterface;

use Psr\Log\LoggerInterface;

class SurebrightInstaller implements InstallDataInterface{
    /**
     * @var ConfigBasedIntegrationManager
     */

    private $integrationManager;
    protected $logger;

    /**
     * @param ConfigBasedIntegrationManager $integrationManager
     */

    public function __construct(ConfigBasedIntegrationManager $integrationManager, LoggerInterface $logger)
    {
        $this->integrationManager = $integrationManager;
        $this->logger = $logger;
    }

    /**
     * {@inheritdoc}
     */

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        try{
            $this->logger->debug("Initiating Surebright Integration setup.");
            $this->integrationManager->processIntegrationConfig(['SureBright Product Protection']);
            $this->logger->debug("Completed Surebright Integration setup.");
        }catch(Exception $error){
            $this->logger->debug("Logging error on Surebright Integration setup.");
            $this->logger->debug($error);
        }
    }
}
