<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Log\Package\Bootstrap;

use Ixocreate\Application\Service\Bootstrap\BootstrapItemInterface;
use Ixocreate\Application\Service\Configurator\ConfiguratorInterface;

final class LogBootstrapItem implements BootstrapItemInterface
{
    public function getConfigurator(): ConfiguratorInterface
    {
        return new LogConfigurator();
    }

    public function getVariableName(): string
    {
        return 'log';
    }

    public function getFileName(): string
    {
        return 'log.php';
    }
}
