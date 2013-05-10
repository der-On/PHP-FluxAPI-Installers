<?php

namespace FluxAPI\Installers;

class FluxApiInstaller extends Composer\Installer\BaseInstaller
{
    protected $locations = array(
        'plugin'    => 'Plugins/{$name}/',
    );
}