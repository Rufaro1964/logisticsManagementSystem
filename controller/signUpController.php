<?php

    require('../database/connection.php');



    class SignUpController{

        private $database;
        private $dbConnection;

        public function __construct(){
            $this->database = new Database();
            $this->dbConnection = $this->database->connect();
        }


        // FUNCTION TO SIGN UP A USER
        public function signUp($username, $email, $password){
            $statement = $this->dbConnection->prepare("INSERT INTO users (`username`, `email`, `password`) VALUES(?,?,?)");
            $statement->bind_param("sss", $username, $email, $password);
            return $statement->execute();
        }
    }

?>