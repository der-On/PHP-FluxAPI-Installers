<?php

namespace FluxAPI\Installers;

class Installer extends Composer\Installer\BaseInstaller
{
    protected $locations = array(
        'plugin'    => 'Plugins/{$name}/',
    );
}