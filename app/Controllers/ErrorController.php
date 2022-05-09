<?php

namespace Exo\Controllers;

/**
 * Controller managing error pages
 */
class ErrorController extends CoreController {

  /**
   * Method that manages the displaying of the 404 page
   *
   * @return void
   */
  public function error404()
  {
    // The browser is told that the page is not found with a 404 code
    http_response_code(404);
    $this->show('404');
  }

}