<?php

namespace app\config;

use \PDO;
use \PDOException;

class Database {
     
    private static $instance;
    private $connection;

    private function __construct()
    {
        try{

            $dsn = 'mysql:host=localhost;dbname=todoApp;charset=utf8';
            $username = 'root';
            $password = '';

            $this->connection = new PDO($dsn,$username,$password);

        }catch(PDOException $e){
           return "Error connection" . $e->getMessage();
        }
    }


    public static function getInstance(){

        if(!self::$instance){
            self::$instance = new Database;
        }

        return self::$instance;
    }


    public function getConnection(){
        return $this->connection;
    }
}