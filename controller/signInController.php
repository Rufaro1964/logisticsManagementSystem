<?php

    require('../database/connection.php');

    class SignInController{

        
        private $database;
        private $dbConnection;

        public function __construct(){
            $this->database = new Database();
            $this->dbConnection = $this->database->connect();
        }

        
    }

?>