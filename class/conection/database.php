<?php

/**
 * Description of database
 * @author julioenglish
 */

class database {

    private static $servername = "localhost";
    private static $username = "username";
    private static $password = "password";
    private static $dbname = "myDB";
    private static $conn = null;

    public function __construct() {
        
    }

    public static function openConection() {
        if (null == self::$conn) {
            try {
                $conn = new PDO("mysql:host=" . self::$servername . ";" . "dbname=" . self::$dbname, self::$username, self::$password);
            } catch (Exception $exc) {
                echo $exc->getMessage();
            }
        }
        return self::$conn;
    }

    public static function closeConection() {
        return self::$conn = null;
    }
    
}