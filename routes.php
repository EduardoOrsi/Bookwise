<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.controller.php',
    '/book' => 'controllers/book.controller.php'
];

function routeToController($uri, $routes) {
  if(array_key_exists($uri, $routes)){
      require $routes[$uri];
  } else {
      abort(404);
  }
};

routeToController($uri, $routes);