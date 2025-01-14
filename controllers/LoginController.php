<?php

namespace app\controllers;

use app\helpers\View;
use app\Router;

class LoginController {
    public static function signIn() {
        # Estado del login
        $user = null;
        $errors = [];

        View::render('sign-in', [
            'user'   => $user,
            'errors' => $errors,
        ]);
    }

    public static function signUp() {
        # Estado del login
        $user = null;
        $errors = [];

        View::render('sign-up', [
            'user'   => $user,
            'errors' => $errors,
        ]);
    }
}