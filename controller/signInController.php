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



        /**
         * @return: bool->false OR redirects to a page.
         * @param: $username (String)
         * @param: $password (String)
         * 
         * If the DB query is successful and a row is returned, the user is directed to details-entry page
         * to finish up with the registration process.
         */

        public function signIn($username, $password){

            $statement = $this->dbConnection->prepare("SELECT * FROM users WHERE `email`=? AND `password`=? LIMIT 1");
            $statement->bind_param("ss", $username, $password);
            $statement->execute();
            $result = $statement->get_result();

            if($result->num_rows > 0){
                $user = $result->fetch_assoc();
                $_SESSION['id'] = $user['id'];
                $firstLogin = $user['first_login'];
                
                if(isset($_SESSION['id'])){
                    
                    if($firstLogin === 'yes'){
                        header('Location: details-entry-form.php');
                    }else{
                        header('Location: home.php');
                    }

                }

            }else{
                return false;
            }

        }
        
    }

?>