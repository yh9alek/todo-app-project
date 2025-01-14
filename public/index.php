<?php

require_once __DIR__.'/../vendor/autoload.php';
use app\Router;

(new Router)->resolve();

# Punto de entrada del servidor