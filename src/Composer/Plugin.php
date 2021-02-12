<?php

namespace ErdmannFreunde\OptimistTheme\Composer;

use Composer\Composer;
use Composer\DependencyResolver\Operation\InstallOperation;
use Composer\DependencyResolver\Operation\UpdateOperation;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Installer\PackageEvent;
use Composer\Installer\PackageEvents;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Util\Filesystem;

class Plugin implements PluginInterface, EventSubscriberInterface
{

    /**
     * {@inheritdoc}
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        // nothing to do here
    }

    public function deactivate(Composer $composer, IOInterface $io): void
    {
        // Nothing to do here
    }

    public function uninstall(Composer $composer, IOInterface $io): void
    {
        // Nothing to do here
    }

    /** @noinspection PhpUnused */
    public function installThemeFiles(PackageEvent $event)
    {
        $operation = $event->getOperation();

        if ($operation instanceof InstallOperation) {
            $package = $operation->getPackage();
        } elseif ($operation instanceof UpdateOperation) {
            $package = $operation->getTargetPackage();
        }

        if (null === $package || $package->getName() !== 'erdmannfreunde/optimist-theme-bundle') {
            return;
        }

        $filesystem = new Filesystem();

        $target = dirname($event->getComposer()->getConfig()->get('vendor-dir'));
        $source = $event->getComposer()->getInstallationManager()->getInstallPath($package).'/skeleton';

        if (is_dir($target.'/files/theme') && !$filesystem->isDirEmpty($target.'/files/theme')) {
            $event->getIO()->writeError(
                'OPTIMIST Theme Demo: Cannot install theme files because folder "/files/theme" exists. Remove/rename the folder and make sure that you have a backup of the files inside "/files/theme" and "/templates/theme" folders.'
            );

            return;
        }

        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($source, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::LEAVES_ONLY
        );

        /** @var \RecursiveDirectoryIterator&\RecursiveIteratorIterator $iterator */
        /** @var \SplFileInfo $file */
        foreach ($iterator as $file) {
            $targetPath = $target . DIRECTORY_SEPARATOR . $iterator->getSubPathName();

            $event->getIO()->write(sprintf('OPTIMIST Theme Demo: installing "%s" to "%s" ', $file->getPathname(), $targetPath), true, IOInterface::VERY_VERBOSE);

            if ($file->isDir()) {
                $filesystem->ensureDirectoryExists($targetPath);
            } else {
                $filesystem->ensureDirectoryExists(dirname($targetPath));
                copy($file->getPathname(), $targetPath);
            }
        }
    }

    /**
     * Returns an array of event names this subscriber wants to listen to.
     * The array keys are event names and the value can be:
     * * The method name to call (priority defaults to 0)
     * * An array composed of the method name to call and the priority
     * * An array of arrays composed of the method names to call and respective
     *   priorities, or 0 if unset
     * For instance:
     * * array('eventName' => 'methodName')
     * * array('eventName' => array('methodName', $priority))
     * * array('eventName' => array(array('methodName1', $priority), array('methodName2'))
     *
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents()
    {
        return [
            PackageEvents::POST_PACKAGE_INSTALL => 'installThemeFiles',
            PackageEvents::POST_PACKAGE_UPDATE => 'installThemeFiles',
        ];
    }
}
