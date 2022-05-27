<?php
/*
 * This file is part of the Composer-tools package.
 *
 * (c) Lukas Hron <info@lukashron.cz>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace LukasHron\Composer\Utils\PackagesVersions;

class PackagesVersions
{
    public function getPackagesVersionsList(): array
    {
        $composerPackages = \Composer\InstalledVersions::getInstalledPackages();

        $packagesList = [];

        foreach ($composerPackages as $package) {
            $packagesList[] = [
                'name' => $package,
                'version' => \Composer\InstalledVersions::getVersion($package)
            ];
        }

        return $packagesList;
    }
}
