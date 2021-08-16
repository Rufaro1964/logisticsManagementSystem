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
        /**
         * @return String
         * @param: $username (String)
         * @param: $email (String)
         * @param: $password (String)
         * @param: $confirmPassword (String)
         */
        public function signUp($username, $email, $password, $confirmPassword){
            if($password != $confirmPassword){
                return "<script>alert('Passwords do not match. Please check and verify that the passwords match.')</script>";
            }else{
                $statement = $this->dbConnection->prepare("INSERT INTO users (`username`, `email`, `password`) VALUES(?,?,?)");
                $statement->bind_param("sss", $username, $email, $password);
                
                if($statement->execute()){
                    return "<script>alert('User has been successfully added to the database.')</script>";
                }else{
                    return "<script>alert('Error when creating a new user.')</script>";
                }
            }
           
        }
    }

?>