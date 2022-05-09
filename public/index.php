<?php

// Allow to load all dependencies managed by composer

use Exo\Controllers\ErrorController;

require __DIR__.'/../vendor/autoload.php';

/* 
Rather than making the router "by hand", I choose to use the AltoRouter package because it makes it easier to use many features (such as dynamic routing with named route parameters, it can be used with all HTTP Methods, etc...) 
https://packagist.org/packages/altorouter/altorouter
*/
$router = new AltoRouter();
// Tells AltoRouter the "fixed" part of the URL (thanks to the htaccess file)
$router->setBasePath($_SERVER['BASE_URI']);

// **********
// * ROUTES
// **********
// --- Home page ---
$router->map(
  'GET', // HTTP method used
  '/',   // URL of the route
  [ // The "target" of the URL
    'method'     => 'home', // Method to use to respond to this route
    'controller' => 'MainController' // Controller containing the method
  ],
  'home' // Route name
);

// --- Sign up page ---
$router->map(
  'GET',
  '/inscription',
  [
    'method'     => 'signUp',
    'controller' => 'ConnectedController'
  ],
  'signUp'
);

// --- Sign in page ---
$router->map(
  'GET',
  '/connexion',
  [
    'method'     => 'signIn',
    'controller' => 'ConnectedController'
  ],
  'signIn'
);

// --- Contact page ---
$router->map(
  'GET',
  '/contact',
  [
    'method'     => 'contact',
    'controller' => 'ContactController'
  ],
  'contact'
);

// **********
// * DISPATCH
// **********
// Check that the page requested by the user is part of the routes defined in AltoRouter
$match = $router->match();

// If page exists, $match contains an array with route info (method, controller, route name)
if($match !== false) {
  // Get method and controller
  $methodToUse = $match['target']['method'];
  $controllerToUse = $match['target']['controller'];

  // Use the namespace to instantiate the controller
  $controllerToUse = "Exo\Controllers\\" . $controllerToUse;
  $contoller = new $controllerToUse;

  // Execute method associated with our URL
  $contoller->$methodToUse($match['params']);
} 
// Otherwise, $match contains false, we show to the user an error page
else {
  $contoller = new Exo\Controllers\ErrorController;
  $contoller->error404();
}