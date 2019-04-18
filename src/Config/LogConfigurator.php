<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Log\Package\Bootstrap;

use Ixocreate\Application\Service\Configurator\ConfiguratorInterface;
use Ixocreate\Application\Service\Registry\ServiceRegistryInterface;

class LogConfigurator implements ConfiguratorInterface
{
    /**
     * @param ServiceRegistryInterface $serviceRegistry
     * @return void
     */
    public function registerService(ServiceRegistryInterface $serviceRegistry): void
    {
    }
}
