<?php 
    class Database {

        public $conn;

        public function getConnection($db_config){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $db_config['host'] . ";dbname=" . $db_config['database_name'], $db_config['username'], $db_config['password']);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }  
