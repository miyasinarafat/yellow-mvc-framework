<?php
namespace App\Config;

use PDO;

class Database
{
    private static $conn = null;

    /**
     * DB Connection
     * @return null|PDO
     */
    public static function getConn()
    {
        if (is_null(self::$conn)){
            self::$conn = new PDO("mysql:host=localhost;dbname=yellow_mvc_structure", 'homestead', 'secret');
        }
        return self::$conn;
    }
}