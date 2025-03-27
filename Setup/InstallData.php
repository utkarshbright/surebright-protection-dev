<?php
namespace Surebright\Integration\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Integration\Model\ConfigBasedIntegrationManager;
use Magento\Framework\Setup\InstallDataInterface;
use Surebright\Integration\Helper\SureBrightLogger;

class InstallData implements InstallDataInterface{
    /**
     * @var ConfigBasedIntegrationManager
     */

    private $integrationManager;

    /**
     * @param ConfigBasedIntegrationManager $integrationManager
     */

    public function __construct(ConfigBasedIntegrationManager $integrationManager)
    {
        $this->integrationManager = $integrationManager;
    }

    /**
     * {@inheritdoc}
     */

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $logger = $this->objectManager->create(SureBrightLogger::class);
        $logger->logInstallationStep('Module Installation', 'Started');
        $this->integrationManager->processIntegrationConfig(['SureBright Product Protection']);
        $logger->logInstallationStep('Module Installation', 'Completed');
    }
}