<?php


require 'core/boostrap.php';




$router = new Router;

require 'routes.php';

// parse_url($_REQUEST[$_REQUEST]);

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
// trim($_SERVER['REQUEST_URI'], '/');


require $router->direct($uri);