<?php

namespace app;

use app\controllers\LoginController;

/**
 * Clase con la lógica necesaria para validar las peticiones del usuario hacia el servidor 👍
 */
class Router {
    private array $getRoutes = [];
    private array $postRoutes = [];

    # Vincular rutas específicas con el método de un controlador -  ruta = [Controlador, Método]
    # Usar get o post según el método HTTP considerado para esa ruta
    public function __construct() {
        $this->get('/sign-in', [LoginController::class, 'signIn']);
        $this->get('/sign-up', [LoginController::class, 'signUp']);
    }

    private function get($url, $fn) {
        $this->getRoutes[$url] = $fn;
    }

    private function post($url, $fn) {
        $this->postRoutes[$url] = $fn;
    }

    /**
     * Método para validar la ruta de una petición
     * @return void
     */
    public function resolve(): void {
        $currentUrl = $_SERVER['REQUEST_URI'] ?? '/';
        $method     = $_SERVER['REQUEST_METHOD'];

        # Obtenemos el array con el controlador y su método a ejecutar -  $fn = [Controlador, Método] ?? null
        $fn = $method === 'GET' ? $this->getRoutes[$currentUrl] ?? null:
                                  $this->postRoutes[$currentUrl] ?? null;
        
        # Ejecutar dinámicamente un controlador con base en el array configurado previamente
        if($fn) call_user_func($fn);
        else {
            echo 'Page not found';
            exit;
        }
    }
}