<?php

class Connection {
    private static $isConnected;
    private function __construct()
    {
    }
    public static function createConnection(){
        if(!isset(self::$isConnected)){
            try{
            self::$isConnected = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
            self::$isConnected->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                echo "Connection failed: " . $e->getMessage();
            }
        }
        return self::$isConnected;
    }
}