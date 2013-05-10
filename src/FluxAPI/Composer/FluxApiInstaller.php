<?php

namespace FluxAPI\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class FluxApiInstaller extends LibraryInstaller
{
    protected $_locations = array(
        'flux-api-plugin'    => 'Plugins/',
    );

    public function getInstallPath(PackageInterface $package)
    {
        $type = $package->getType();
        if (isset($this->_locations[$type])) {
            return $this->_locations[$type] . $package->getPrettyName();
        } else {
            throw new \InvalidArgumentException('Unable to install package, it is not within the supported package types.');
        }
    }

    public function supports($packageType)
    {
        return in_array($packageType, array_keys($this->_locations));
    }
}