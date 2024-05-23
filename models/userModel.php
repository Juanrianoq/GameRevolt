<?php
    include_once '../config/db.php';

    class UserModel{
        //Attributes.
        private $name;
        private $email;
        private $password;
        private $creationDate;

        //DB Conection.
        private $db;

        //Constructor.
        public function __construct(){
            $this->db = Database::connect();
        }

        //Get Functions.
        public function getName(){
            return $this->name;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getCreationDate(){
            return $this->creationDate;
        }

        //Set Functions.
        public function setName($name){
            $this->name = $this->db->real_escape_string($name);
        }
        public function setEmail($email){
            $this->email = $this->db->real_escape_string($email);
        }
        public function setPassword($password){
            $this->password = $this->db->real_escape_string($password);
        }

        //CRUD Functions
        public function insertUser(){

            //Query.
            $sql = "INSERT INTO tbl_user VALUES
            ('{$this->getName()}', '{$this->getEmail()}','{$this->getPassword()}', '{$this->getCreationDate()}')";

            $saveQuery = $this->db->query($sql);
            $result = false;
            if($saveQuery){
                $result = true;
            }
            return $result;
        }
    }

?>