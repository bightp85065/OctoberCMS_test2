<?php namespace bohan2\calculator;

use Backend;
use System\Classes\PluginBase;

/**
 * calculator Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'calculator',
            'description' => 'No description provided yet...',
            'author'      => 'bohan2',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'bohan2\calculator\Components\Calculator' => 'bohanCalculator',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'bohan2.calculator.some_permission' => [
                'tab' => 'calculator',
                'label' => 'Some permission'
            ],
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
            'calculator' => [
                'label'       => 'calculator',
                'url'         => Backend::url('bohan2/calculator/calculator'),
                'icon'        => 'icon-leaf',
                'permissions' => ['bohan2.calculator.*'],
                'order'       => 500,
            ],
        ];
    }
}
