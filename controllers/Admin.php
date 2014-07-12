<?php

namespace ManagedPixels\Pluginstarter\Controllers;

// class imports
use Flash;
use BackendMenu;
use Backend\Classes\Controller;

/**
 *
 */
class Start extends Controller
{

  public $pageTitle="My Starter Plugin";

/**
 * http://octobercms.com/docs/plugin/components#component-class-definition
 */
  public function __construct()
  {
    parent::__construct();
    BackendMenu::setContext('ManagedPixels.Pluginstarter','start');
    //inject page assets - http://octobercms.com/docs/plugin/components#component-assets
    $this->addCss('/plugins/managedpixels/pluginstarter/assets/css/starter-style.css');
  }

 /**
  * Controller action
  */
  public function index() {
     //pass data to admin view via vars
    $this->vars['hello'] = 'Hello from the Controller...';
  }


}
