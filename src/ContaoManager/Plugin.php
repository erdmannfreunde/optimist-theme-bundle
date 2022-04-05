<?php

declare(strict_types=1);

/*
 * This file is part of erdmannfreunde/optimist-theme-bundle.
 *
 * (c) Erdmann & Freunde <https://erdmann-freunde.de>
 *
 * @license LGPL-3.0-or-later
 */

namespace ErdmannFreunde\OptimistTheme\ContaoManager;

use Contao\ManagerPlugin\Config\ContainerBuilder;
use Contao\ManagerPlugin\Config\ExtensionPluginInterface;

class Plugin implements ExtensionPluginInterface
{
    /**
     * Allows a plugin to override extension configuration.
     *
     * @param string $extensionName
     *
     * @return array<string,mixed>
     */
    public function getExtensionConfig($extensionName, array $extensionConfigs, ContainerBuilder $container)
    {
        if ('contao' === $extensionName) {
            foreach ($extensionConfigs as $id => $config) {
                $extensionConfigs[$id]['localconfig'] = array_merge($config['localconfig'] ?? [], ['folderUrl' => true]);
            }
        }

        return $extensionConfigs;
    }
}
