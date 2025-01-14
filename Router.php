<?php

namespace app;

class Router {
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn) {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn) {
        $this->postRoutes[$url] = $fn;
    }

    public function resolve() {
        $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        $fn = $method === 'GET' ? $this->getRoutes[$currentUrl] ?? null:
                                  $this->postRoutes[$currentUrl] ?? null;
        
        if($fn) call_user_func($fn);
        else {
            echo 'Page not found';
            exit;
        }
    }
}