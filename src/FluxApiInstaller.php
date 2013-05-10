<?php

namespace FluxAPI\Composer;

class FluxApiInstaller extends Composer\Installer\BaseInstaller
{
    protected $locations = array(
        'plugin'    => 'Plugins/{$name}/',
    );
}