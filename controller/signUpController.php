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



<<<<<<< HEAD
        
        public function updateUser($user_id, $firstname, $lastname, $address, $phone, $identification_no, $gender, $country, $dob, $first_login, $file){

=======
        public function updateUser($user_id, $firstname, $lastname, $address, $phone, $identification_no, $gender, $country, $dob, $first_login){
>>>>>>> parent of bf06dbc (.)

            $statement = $this->dbConnection->prepare("UPDATE users SET `firstname`=?, `lastname`=?, `address`=?, `gender`=?, `d_o_b`=?, `country`=?, `nrc`=?, `phone`=?, `first_login`=? WHERE users.id=?");
            $statement->bind_param("sssssssssi", $firstname, $lastname, $address, $gender, $dob, $country, $identification_no, $phone,$first_login, $user_id);
            if($statement->execute()){
                return true;
            }
            return false;   
            $statement = $this->dbConnection->prepare("UPDATE TABLE users SET `firstname`=?, `lastname`=?, `address`=?, `gender`=?, `d_o_b`=?, `country`=?, `nrc`=?, `phone`=? WHERE users.id=?");
            $statement->bind_param("ssssssssi", $firstname, $lastname, $address, $gender, $dob, $country, $identification_no, $phone, $user_id);
            if($statement->execute()){
                return true;
            }
            return false;
        }



        public function addToLicense($user_id, $license_number, $year_of_issue, $year_of_expiry, $class, $other_class){

            $statement = $this->dbConnection->prepare("INSERT INTO licences (`user_id`,`licence_number`,`class`,`other_class`,`year_of_issue`,`year_of_expiry`, `url`) VALUES(?,?,?,?,?,?,?)");

            $statement->bind_param("issssss", $user_id, $license_number, $class, $other_class, $year_of_issue, $year_of_expiry, $url);
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