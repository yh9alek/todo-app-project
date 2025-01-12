<?php

namespace app\controllers;

use app\Router;

class UsersController {
    public static function index(Router $router) {
        $router->renderView('modules/sign-in-out');
    }
}