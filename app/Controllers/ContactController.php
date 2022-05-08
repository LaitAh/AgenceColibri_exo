<?php

namespace Exo\Controllers;

/**
 * Controller that manages the contact page
 * ContactController inherits from the CoreController in order to have access to the show method
 */
class ContactController extends CoreController {
  
  /**
   * Method managing the displaying of the contact page
   * 
   * @return void
   */
  public function contact() {
    $this->show('contact');
  }
}