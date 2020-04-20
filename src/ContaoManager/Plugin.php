<?php

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
            $extensionConfigs[] = ['localconfig' => ['folderUrl' => true]];
        }

        return $extensionConfigs;
    }
}
