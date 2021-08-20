<?php
   
    class Database{

        private $connection;
        private $host = 'localhost';
        private $username = 'root';
        private $password = 'Demaga_360';
        private $database = 'logst';
        

        public function __construct(){}

        
        // Connection to the database
        public function connect(){
            
            $this->connection = new MySQLi($this->host, $this->username, $this->password, $this->database);

            if(!$this->connection){
                die('Could not connect to the database'. $this->connection->error());
            }
            return $this->connection;
        }
    }

?>