<?php

    require('../database/connection.php');
    require('../controller/HelperClass.php');



    class SignUpController{

        private $database;
        private $dbConnection;
        private $helper;

        public function __construct(){
            $this->database = new Database();
            $this->dbConnection = $this->database->connect();
            $this->helper = new HelperClass();
        }


        // FUNCTION TO SIGN UP A USER
        /**
         * @return String
         * @param: $username (String)
         * @param: $email (String)
         * @param: $password (String)
         * @param: $confirmPassword (String)
         */
        public function signUp($username, $email, $password){

            if($this->helper->existsUser($username)){
                return "The username is already in use.";
            }

            $statement = $this->dbConnection->prepare("INSERT INTO users (`username`, `email`, `password`) VALUES(?,?,?)");
            $statement->bind_param("sss", $username, $email, $password);
            
            if($statement->execute()){
                return "Successfully registered";

            }else{
                return "Error when adding the user.";
            }
        }



        
        public function updateUser($user_id, $firstname, $lastname, $address, $phone, $identification_no, $gender, $country, $dob, $first_login, $file){

            $this->helper->uploadFile($file);

            $statement = $this->dbConnection->prepare("UPDATE users SET `firstname`=?, `lastname`=?, `address`=?, `gender`=?, `d_o_b`=?, `country`=?, `nrc`=?, `phone`=?, `first_login`=? WHERE users.id=?");
            $statement->bind_param("sssssssssi", $firstname, $lastname, $address, $gender, $dob, $country, $identification_no, $phone,$first_login, $user_id);
            if($statement->execute()){
                return true;
            }
            return false;   
        }



        public function addToLicense($user_id, $license_number, $year_of_issue, $year_of_expiry, $class, $other_class){

            $statement = $this->dbConnection->prepare("INSERT INTO lincences (`user_id`, `licence_number`, `class`, `other_class`, `year_of_issue`, `year_of_expiry`) VALUES(?,?,?,?,?,?)");

            $statement->bind_param("isssss", $user_id, $license_number, $class, $other_class, $year_of_issue, $year_of_expiry);
            if($statement->execute()){
                return true;
            }
            return false;
        }



        public function addToNextOfKin($user_id, $firstname, $lastname, $relationship, $phone){

            $statement = $this->dbConnection->prepare("INSERT INTO next_of_kin (`user_id`, `firstname`, `lastname`, `relationship`, `phone`) VALUES (?,?,?,?,?)");
            $statement->bind_param("issss", $user_id, $firstname, $lastname, $relationship, $phone);
            if($statement->execute()){
                return true;
            }
            return false;

        }
    }

?>