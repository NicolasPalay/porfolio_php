<?php

use Router\Router;
use src\App;

require '../vendor/autoload.php';

define('BASE_VIEW_PATH' , dirname(__DIR__) . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR);

$router = new Router();
$router->get('/', ['Controller\HomeController', 'index']);
$router->get('/projects', ['Controller\ProjectController', 'index']);

(new App($router, [
    'uri' =>$_SERVER['REQUEST_URI'],
    'method'=>$_SERVER['REQUEST_METHOD']
    ]
))->run();