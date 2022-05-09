<?php

namespace Exo\Controllers;

/**
 * Controller that manages the "main" pages
 * MainController inherits from the CoreController in order to have access to the show method
 */
class MainController extends CoreController {
  
  /**
   * Method managing the displaying of the home page
   * 
   * @return void
   */
  public function home() {
    $this->show('home');
  }
}