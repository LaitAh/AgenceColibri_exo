<?php

namespace Exo\Controllers;

/**
 * Controller grouping together all the methods common to all controllers
 */
class CoreController {

  /**
     * Method displaying a page
     *
     * @param string $viewName
     * @param array $viewData
     * @return void
     */
    public function show($viewName, $viewData = [])
    {
        // Get the router variable
        global $router;
        
        // Need an absolute URL in the case we have to show assets
        $absoluteUrl = $_SERVER['BASE_URI'];

        // $viewData is an array containing various informations that could be useful to our templates
        // Extract allows to create a variable for each element of the array passed as an argument
        extract($viewData);
        // $viewData is available in every view file
        require_once __DIR__.'/../Views/header.tpl.php';
        require_once __DIR__.'/../Views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../Views/footer.tpl.php';
    }
}