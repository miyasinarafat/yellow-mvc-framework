<?php

namespace App\Config;

class Functions
{
    public static function limit($value, $lime, $end = '...')
    {
        if (mb_strwidth($value, 'UTF-8') <= $lime){
            return $value;
        }
        return rtrim(mb_strimwidth($value, 0, $lime, '', 'UTF-8')).$end;
    }
}