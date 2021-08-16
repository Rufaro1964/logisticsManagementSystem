<?php
    session_start();

    require('../database/connection.php');

    class SignInController{

        /**
         * we need to create helper functions to do some simple tasks like encrypting the password...
         */

        
        private $database;
        private $dbConnection;

        public function __construct(){
            $this->database = new Database();
            $this->dbConnection = $this->database->connect();
        }

        public function signIn($username, $password){

            $statement = $this->dbConnection->prepare("SELECT * FROM users WHERE `email`=? AND `password`=? LIMIT 1");
            $statement->bind_param("ss", $username, $password);
            $statement->execute();
            $result = $statement->get_result();

            if($result->num_rows > 0){
                $user = $result->fetch_assoc();
                $_SESSION['id'] = $user['id'];
                if(isset($_SESSION['id'])){
                    header('Location: details-entry-form.php');
                }

            }else{
                return false;
            }

        }
        
    }

?>