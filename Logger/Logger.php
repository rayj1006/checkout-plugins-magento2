<?php
namespace Latitude\Checkout\Logger;

use Monolog\Logger as MonoLogger;

class Logger extends MonoLogger
{
    public function __construct($name, array $handlers = [], array $processors = [])
    {
        parent::__construct($name, $handlers, $processors);

        try {
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $productMetadata = $objectManager->get('\Magento\Framework\App\ProductMetadataInterface');
            $version = $productMetadata->getVersion();
            $this->pushProcessor(function ($record) use ($version) {
                $record['extra']['magentoVersion'] = $version;
                return $record;
            });
        } catch (\Exception $e) {
            // print $e->getMessage();
        }
    }
}
