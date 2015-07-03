<?php

require("../vendor/autoload.php");

$router = new \Sj\Router;

$routes = array(
    '/' => '',
    '/test/:title' => 'Main:test@get'
);

$router->addRoutes($routes);

$router->run();