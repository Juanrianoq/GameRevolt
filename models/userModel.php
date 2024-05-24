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

        //GET Functions.
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

        //SET Functions.
        public function setName($name){
            $this->name = $this->db->real_escape_string($name);
        }
        public function setEmail($email){
            $this->email = $this->db->real_escape_string($email);
        }
        public function setPassword($password){
            $this->password = $this->db->real_escape_string($password);
        }
        public function setCreationDate($creationDate){
            $this->creationDate = $this->db->real_escape_string($creationDate);
        }

        //CRUD Functions
        public function registerUser(){

            //ValidationQuery.
            $existValidation = "SELECT * FROM tbl_user WHERE name = '{$this->getName()}' OR email = '{$this->getEmail()}'";
            $existQuery = $this->db->query($existValidation);
            
            if(mysqli_num_rows($existQuery) > 0){
                return false;
            }
            else{
                //Query.
                $sql = "INSERT INTO tbl_user VALUES
                ('','{$this->getName()}', '{$this->getEmail()}','{$this->getPassword()}', '{$this->getCreationDate()}')";

                $saveQuery = $this->db->query($sql);
                $result = false;
                if($saveQuery){
                    $result = true;
                }
                return $result;
            }
        }
        public function loginUser(){

            //Query.
            $sql = "SELECT * FROM tbl_user
            WHERE email = '{$this->getEmail()}' AND password = '{$this->getPassword()}'";

            $saveQuery = $this->db->query($sql);
            $rows = mysqli_num_rows($saveQuery);

            $result = false;
            if($rows > 0){
                $result = true;
            }
            return $result;
        }
    }

?>