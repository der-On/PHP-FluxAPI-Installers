<?php

namespace FluxAPI\Composer;

class FluxApiInstaller extends \Composer\Installers\BaseInstaller
{
    protected $locations = array(
        'plugin'    => 'Plugins/{$name}/',
    );
}