<?php

    require_once('../database/connection.php');


    class HelperClass{

        private $database;
        private $dbConnection;
    
        public function __construct(){
            $this->database = new Database();
            $this->dbConnection = $this->database->connect();
        }


        public function existsUser($username) :bool {

            $statement = $this->dbConnection->prepare("SELECT * FROM users WHERE `username`=? LIMIT 1");
            $statement->bind_param("s", $username);
            $statement->execute();
            $result = $statement->get_result();
            
            if($result->num_rows > 0){  
                return true;
            }
            return false;
        }
    }

?>