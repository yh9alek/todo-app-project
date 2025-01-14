<?php

namespace app\helpers;

class CSS {
    private static array $CSSPaths = [
        '/sign-in' => '/assets/css/sign-in.css',
        '/sign-up' => '/assets/css/sign-up.css',
    ];

    public static function get(string $path): string {
        return self::$CSSPaths[$path];
    }
}