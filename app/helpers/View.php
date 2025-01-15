<?php

namespace app\helpers;

class View {
    /**
     * Renderizar una vista y datos obtenidos por el backend
     * @param string $view  Nombre del módulo a renderizar
     * @param array $params Datos a renderizar en el módulo
     * @return void
     */
    public static function render(string $view, array $params = []) {

        # Variables para renderizar datos en el frontend 
        # (Usamos las variables dentro de los módulos)
        if(!empty($params))
            foreach($params as $key => $value) {
                $$key = $value;
            }
        
        # Guardar el HTML del módulo renderizado en memoria
        ob_start();
        include_once __DIR__."/../views/modules/$view.php";
        $module = ob_get_clean();

        $layout = $view === 'sign-in' || $view === 'sign-up' ? '_index-layout.php'
                                                             : '_layout.php';
        
        # Renderizar el template a usar (dentro usamos la variable $module)                                   
        include_once __DIR__.'/../views/'.$layout;

    }
}