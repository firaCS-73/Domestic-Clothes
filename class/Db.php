<?php

    class Db {
        private $host = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database = 'bd_domestic';

        //php will automaticaly call this method when make an object of this class
        public function __construct(){
            try{
                $dsn = "mysql:host={$this->host}; dbname={$this->database};";
                $option = array(PDO::ATTR_PERSISTENT);

                $this->db = new PDO($dsn, $this->username, $this->password, $option);

            }catch(PDOException $e) {
                echo "Connection Error: ". $e->getMessage();
            }
        }
    }

    //$obj = new Db();
    //var_dump($obj);

?>