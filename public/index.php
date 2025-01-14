<?php

require_once __DIR__.'/../vendor/autoload.php';

use app\Router;
use app\controllers\LoginController;

$router = new Router;

$router->get('/sign-in', [LoginController::class, 'signIn']);
$router->get('/sign-up', [LoginController::class, 'signUp']);

$router->resolve();