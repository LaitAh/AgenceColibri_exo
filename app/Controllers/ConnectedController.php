<?php

namespace Exo\Controllers;

/**
 * Controller that manages the pages related to the connection
 * ConnectedController inherits from the CoreController in order to have access to the show method
 */
class ConnectedController extends CoreController {
  
  /**
   * Method managing the displaying of the sign in page
   * 
   * @return void
   */
  public function signIn() {
    $this->show('signIn');
  }

  /**
   * Method managing the displaying of the sign up page
   * 
   * @return void
   */
  public function signUp() {
    $this->show('signUp');
  }
}