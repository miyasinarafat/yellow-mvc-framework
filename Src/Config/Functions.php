<?php

namespace App\Config;

class Functions
{
    public static function limit($value, $limit = 100, $end = '...')
    {
        if (mb_strwidth($value, 'UTF-8') <= $limit){
            return $value;
        }
        return rtrim(mb_strimwidth($value, 0, $limit , '', 'UTF-8')).$end;
    }
}