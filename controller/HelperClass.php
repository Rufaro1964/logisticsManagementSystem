<?php

    class HelperClass{

        public function __construct(){}


        public function existsUser() :bool {


            
            return false;

        }


<<<<<<< HEAD
        /**
         * @param: String $username
         */
        public function existsUser($username) :bool {
=======
        
        public function existsNextOfKin() :bool{
>>>>>>> parent of bf06dbc (.)

            return false;
        }

<<<<<<< HEAD
        


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

        
=======
>>>>>>> parent of bf06dbc (.)
    }

?>