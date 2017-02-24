<?php namespace BoHan\Calculator;

use System\Classes\PluginBase;
class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Calculator',
            'description' => 'Integrate BoHan with October CMS',
            'author'      => 'BoHan',
            'icon'        => 'icon-leaf'
        ];
    }
    public function registerComponents()
    {
        return [
            'BoHan\Calculator\Components\CalButton' => 'CalButton'
        ];
    }
    public function registerSettings()
    {
         return [
            'settings' => [
                'label'       => 'Api Key',
                'description' => 'Manage your Api Key.',
                'category'    => 'Calculator',
                'icon'        => 'icon-cog',
                'class'       => 'BoHan\Calculator\Models\Settings',
                'order'       => 500
            ]
        ];
    }
    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'demo' => [
                'label'       => 'Demo',
                'url'         => Backend::url('bohan/calculator/calculator'),
                'icon'        => 'icon-leaf',
                'permissions' => ['bohan.calculator.*'],
                'order'       => 500,
            ],
        ];
    }
}