<?php namespace OCStream\FRM;

use Backend;
use System\Classes\PluginBase;

/**
 * FRM Plugin Information File
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
            'name'        => 'FRM',
            'description' => 'No description provided yet...',
            'author'      => 'OCStream',
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
        return []; // Remove this line to activate

        return [
            'OCStream\FRM\Components\MyComponent' => 'myComponent',
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
            'ocstream.frm.some_permission' => [
                'tab' => 'FRM',
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
            'frm' => [
                'label'       => 'FRM',
                'url'         => Backend::url('ocstream/frm/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['ocstream.frm.*'],
                'order'       => 500,
            ],
        ];
    }
}
