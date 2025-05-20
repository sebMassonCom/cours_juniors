<?php

class Database{

    const SERVER = 'mysql:server=localhost;dbname=juniors';
    const USER = 'root';
    const PASS = '';
    public static $db;

    public function __construct(){
        // try{
            self::$db = new PDO(self::SERVER, self::USER, self::PASS);
            // return $db;
        // } catch (Exception $e){
            // echo $e->getMessage();
        // }
    }

}