<?php

    class Database{

        private $connection;

        public function __construct($host, $username, $password, $database){
            $this->connection = $this->connect($host, $username, $password, $database);
        }

        
        // Connection to the database
        public function connect($host, $username, $password, $database){
            
            $this->connection = new MySQLi($host, $username, $password, $database);

            if(!$this->connection){
                die('Could not connect to the database'. $this->connection->error());
            }

            // echo "<script>alert('connected to database')</script>";
            return $this->connection;
        }


        
        // Login Function
        public function verifyLogin($username, $password){
            
            $statement = $this->connection->prepare("SELECT id FROM users WHERE `username`=? AND `password`=?");
            $statement->bind_param("ss", $username, $password);
            $statement->execute();

            $statement->bind_result($id);

            if($id != null && !empty($id)){
                return $id;
            }
        }
        


        // Sign Up function
        public function signUp(){
            
        }

    }

?>