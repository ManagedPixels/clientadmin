<?php

namespace ManagedPixels\Clientadmin\Controllers;

// class imports
use Flash;
use BackendMenu;
use Backend\Classes\Controller;

/**
 *
 */
class Admin extends Controller
{

  public $pageTitle="Client Admin";

/**
 * http://octobercms.com/docs/plugin/components#component-class-definition
 */
  public function __construct()
  {
    parent::__construct();
    BackendMenu::setContext('ManagedPixels.Clientadmin','caAdmin');
    //inject page assets - http://octobercms.com/docs/plugin/components#component-assets
    $this->addCss('/plugins/managedpixels/clientadmin/assets/css/backend-style.css');
  }

 /**
  * Controller action
  */
  public function index() {
     //pass data to admin view via vars
    $this->vars['hello'] = 'Hello from the Controller...';
  }


}
