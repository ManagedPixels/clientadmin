<?php
/**
 *
 * PluginStarter -- Modify and Reuse
 * Change namespace (line 13) match your plugin directory path
 * Edit the pluginDetails() array (name,description,author,icon)
 * Add / Modify component(s) - registerComponents()
 * Register / Modify Navigation -  registerNavigation()
 * Set /Modify permissions - registerPermissions()
 * @url http://octobercms.com/docs/plugin/registration
 *
 */


namespace ManagedPixels\Clientadmin ;
/**
 * class imports
 */
use System\Classes\PluginBase;
use BackendMenu;
use Backend;

class Plugin extends PluginBase {

/**
 * [pluginDetails description]
 * @url http://octobercms.com/docs/plugin/registration#registration-methods
 */

public function pluginDetails() {

        return [
            'name'        => 'Client Admin',
            'description' => 'Client Site Admin',
            'author'      => 'shawn sandy',
            'icon'        => 'icon-sitemap'
        ];

}

public function boot(){

}

/**
 * [registerComponents description]
 * @url http://octobercms.com/docs/plugin/registration#component-registration
 */
public function registerComponents() {
      return [
        '\ManagedPixels\Clientadmin\Components\Settings' => 'caSetting'
      ];
  }


/**
 * Register navigation
 * Set component permissions
 * @url http://octobercms.com/docs/plugin/registration#navigation-permissions
 */
  public function registerNavigation() {


    return [
      'start' => [
        'label' => 'Client Admin',
        'icon' => 'icon-sitemap',
        'url' => Backend::url('managedpixels/clientadmin/admin'),
        'permission' => ['managedpixels.clientadmin.*'],
        'order' => 100
        ]
      ];
  }

/**
 * Register permissions
 * @url http://octobercms.com/docs/plugin/registration#navigation-permissions
 * @url http://octobercms.com/docs/backend/users
 */
  public function registerPermissions() {
    return [
      'managedpixels.clientadmin.access_admin' => ['label' => 'Access Client Admin', 'tab' => 'Access Client Admin']
    ];
  }

}
