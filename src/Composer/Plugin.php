<?php

declare(strict_types=1);

/*
 * This file is part of erdmannfreunde/optimist-theme-bundle.
 *
 * (c) Erdmann & Freunde <https://erdmann-freunde.de>
 *
 * @license LGPL-3.0-or-later
 */

namespace ErdmannFreunde\OptimistTheme\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Util\Filesystem;

class Plugin implements PluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function activate(Composer $composer, IOInterface $io): void
    {
        $filesystem = new Filesystem();

        $target = \dirname($composer->getConfig()->get('vendor-dir'));
        $source = realpath(__DIR__.'/../../skeleton');

        dd($source);

        if (is_dir($target.'/files/theme') && !$filesystem->isDirEmpty($target.'/files/theme')) {
            $io->writeError('OPTIMIST Theme Demo: Cannot install theme files because folder "/files/theme" exists. Remove/rename the folder and make sure that you have a backup of the files inside "/files/theme" and "/templates/theme" folders.');

            return;
        }

        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($source, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::LEAVES_ONLY
        );

        /** @var \RecursiveDirectoryIterator&\RecursiveIteratorIterator $iterator */
        /** @var \SplFileInfo $file */
        foreach ($iterator as $file) {
            $targetPath = $target.\DIRECTORY_SEPARATOR.$iterator->getSubPathName();

            $io->write(sprintf('OPTIMIST Theme Demo: installing "%s" to "%s" ', $file->getPathname(), $targetPath), true, IOInterface::VERY_VERBOSE);

            if ($file->isDir()) {
                $filesystem->ensureDirectoryExists($targetPath);
            } else {
                $filesystem->ensureDirectoryExists(\dirname($targetPath));
                copy($file->getPathname(), $targetPath);
            }
        }
    }

    public function deactivate(Composer $composer, IOInterface $io): void
    {
        // Nothing to do here
    }

    public function uninstall(Composer $composer, IOInterface $io): void
    {
        // Nothing to do here
    }
}
