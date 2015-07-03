<?php

require("../vendor/autoload.php");
$settings = require("../app/config/settings.php");

$router = new \Sj\Router($settings);

$routes = array(
    '/' => '',
    '/test/:title' => 'Main:test@get'
);

$router->addRoutes($routes);

$router->run();