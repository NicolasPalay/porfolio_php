<?php


use Exception\RouteNotFoundException;
use Router\Router;

require '../vendor/autoload.php';

$router = new Router();
$router->register('/', ['Controller\HomeController', 'index']);


try {
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch (RouteNotFoundException $e) {
    echo $e->getMessage();
}