<?php

namespace app\helpers;

/**
 * Clase para importar assets estáticos dinámicamente según el módulo consultado por el cliente
 */
class Asset {

    /**
     * Obtener un recurso estático de manera dinámica
     * @param string $path Módulo actual
     * @param string $type Extensión del asset (.css, .js, .etc)
     * @return string
     */
    public static function get(string $path, string $type): string {
        return "/assets/$type/".ltrim($path, '/').'.'.$type;
    }
}