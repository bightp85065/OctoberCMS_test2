<?php namespace JayChow\Demo;

use Backend;
use System\Classes\PluginBase;

/**
 * Demo Plugin Information File
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
            'name'        => 'Demo',
            'description' => 'No description provided yet...',
            'author'      => 'JayChow',
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
            'JayChow\Demo\Components\Calculator' => 'jayCalculator',
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
            'jaychow.demo.some_permission' => [
                'tab' => 'Demo',
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
            'demo' => [
                'label'       => 'Demo',
                'url'         => Backend::url('jaychow/demo/calculator'),
                'icon'        => 'icon-leaf',
                'permissions' => ['jaychow.demo.*'],
                'order'       => 500,
            ],
        ];
    }
}
