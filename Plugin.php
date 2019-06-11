<?php namespace Bsbvolmachten\Partners;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Bsbvolmachten\Partners\Components\Partners',
        ];
    }

    public function registerSettings()
    {
    }
}
