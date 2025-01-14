<?php

namespace app\helpers;

class Asset {

    public static function get(string $path, string $type): string {
        return "/assets/$type/".ltrim($path, '/').'.'.$type;
    }
}