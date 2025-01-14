<?php

namespace app\helpers;

class View {
    public static function render(string $view, array $params = []) {

        if(!empty($params))
            foreach($params as $key => $value) {
                $$key = $value;
            }
        
        ob_start();
        include_once __DIR__."/../views/modules/$view.php";
        $module = ob_get_clean();

        $layout = $view === 'sign-in' || $view === 'sign-up' ? '_index-layout.php'
                                                             : '_layout.php';
        
        include_once __DIR__.'/../views/'.$layout;

    }
}