<?php 

    require_once('../model/user.model.php');
    require_once('../database/connection.php');


    

    class AdminController{

        private UserModel $userModel;
        private $database;
        private $dbConnection;
    
        public function __construct(){
            $this->database = new Database();
            $this->dbConnection = $this->database->connect();
            $this->userModel = new UserModel();
        }

 
    }

?>