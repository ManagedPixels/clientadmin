<?php
/**
 * PluginStarter Component -- Modify and Reuse
 * Change namespace (line 13) match your plugin directory path
 * Edit the componentDetails() array (name,description,author,icon)
 * Add / Modify component(s) - registerComponents()
 * Register / Modify Navigation -  registerNavigation()
 * Set /Modify permissions - registerPermissions()
 * @url http://octobercms.com/docs/plugin/registration
 *
 */

namespace ManagedPixels\PluginStarter\Components;

use Cms\Classes\ComponentBase;


class Starter extends ComponentBase
{


  /**
   * Set componentDetails()
   * @url http://octobercms.com/docs/plugin/components#component-class-definition
   */
  public function componentDetails() {
    return [
      'name' => "Starter",
      'description' => 'A simple starter component'
    ];
  }

/**
 * defineProperties()
 * @url http://octobercms.com/docs/plugin/components#component-properties
 */
  public function defineProperties(){
    return [
      'yourName' => [
        'title' => 'Your name',
        'description' => 'Lets add your name',
        'placeholder' => 'Enter your name',
        'type' => 'string'
      ]
    ];
  }

/**
 * Create a function and use in the component
 * Access this function in your component views by adding the {{ componentSlug.functionname }}
 * @sample {{ starterPlugin.yourname }}
 */
  public function yourname(){
    return $this->property('yourName');
  }
}
