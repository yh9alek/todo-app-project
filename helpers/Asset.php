<?php

namespace app\helpers;

/**
 * Clase para importar assets estáticos dinámicamente según el módulo consultado por el cliente
 */
class Asset {

    public static function get(string $path, string $type): string {
        return "/assets/$type/".ltrim($path, '/').'.'.$type;
    }
}