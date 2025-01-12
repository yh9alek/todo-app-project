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
        
        if($fn) call_user_func($fn, $this);
        else {
            echo 'Page not found';
            exit;
        }
    }

    public function renderView(string $view, array $params = []) {

        if(!empty($params))
            foreach($params as $key => $value) {
                $$key = $value;
            }
        
        ob_start();
        include_once __DIR__."/views/$view.php";
        $module = ob_get_clean();
        
        include_once __DIR__.'/views/'.($view === 'modules/sign-in-out' ? '_sign-in-out-layout.php'
                                                               : '_layout.php');

    }
}