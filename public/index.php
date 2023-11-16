<?php

use Router\Router;
use src\App;

require '../vendor/autoload.php';

define('BASE_VIEW_PATH' , dirname(__DIR__) . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR);

$router = new Router();
$router->register('/', ['Controller\HomeController', 'index']);

(new App($router, $_SERVER['REQUEST_URI']))->run();