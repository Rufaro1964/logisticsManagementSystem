<?php

    require_once('../database/connection.php');


    class HelperClass{

        private $database;
        private $dbConnection;
    
        public function __construct(){
            $this->database = new Database();
            $this->dbConnection = $this->database->connect();
        }


        /**
         * @param: String $username
         */
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

        


        /**
         * @param: File $file
         */
        public function uploadFile($file){
            
            $file = $_FILES['file'];

            $filename = $_FILES['file']['name'];
            $tempname = $_FILES['file']['tmp_name'];
            $error = $_FILES['file']['error'];

            $fileExtention = explode('.', $filename);
            $fileActualExtention = strtolower(end($fileExtention));

            $allowed = array('jpg', 'jpeg', 'png', 'pdf');

            if(in_array($fileActualExtention, $allowed)){
                if( $error === 0 ){ 
                    $newFileName = uniqid("", true).".".$fileActualExtention;
                    $destination = "uploads/".$newFileName;

                    if(move_uploaded_file($tempname, $destination)){
                        
                        $statement = $this->dbConnection->prepare("INSERT INTO images(`name`, `url`) VALUES(?,?)");
                        $statement->bind_param("ss", $filename, $destination);
                        if($statement->execute()){
                            return true;
                        }
                    }
                }    
            }
        }

        
    }

?>