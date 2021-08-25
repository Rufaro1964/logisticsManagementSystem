<?php

    class UserModel{
        
        private string $firstname;
        private string $lastname;
        private string $email;
        private string $address;
        private string $gender;
        private string $country;
        private string $nrc;
        private string $phoneNumber;
        private string $dob;


        public function getFirstname(){
            $this->firstname;
        }

        public function getLastname(){
            $this->lastname;
        }
        public function getEmail(){
            $this->email;
        }
        public function getAddress(){
            $this->address;
        }
        public function getGender(){
            $this->gender;
        }
        public function getCountry(){
            $this->country;
        }
        public function getNRC(){
            $this->nrc;
        }
        public function getPhoneNumber(){
            $this->phoneNumber;
        }
        public function getDOB(){
            $this->dob;
        }
       
    }