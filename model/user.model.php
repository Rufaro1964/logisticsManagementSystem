<?php

    class User{
        private $username;
        private $email;
        private $password;

        public function __construct($username, $email, $password){
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
        }


        // GETTERS
        public function getUsername(){
            return $this->username;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPassword(){
            return $this->password;
        }
    }

?>