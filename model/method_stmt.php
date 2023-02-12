<?php
    class method_stmt{
        private $ConDB;

         public function __construct(){
             $con = new ConDB();
             $con->connect();
             $this->ConDB = $con->conn;
            }
        
            
        public function check_Email($email){
            $sql = "SELECT `email` FROM `user_tb` WHERE `email` ='".$email."'";
            $query = $this->ConDB->prepare($sql);
            if( $query->execute()){
                $result = $query->fetch(PDO::FETCH_ASSOC);
                return $result;
                return true;
            }else{
                return false;
            }
        }

        public function check_Username($username){
            $sql = "SELECT `username` FROM `user_tb` WHERE `username` ='".$username."'";
            $query = $this->ConDB->prepare($sql);
            if( $query->execute()){
                $result = $query->fetch(PDO::FETCH_ASSOC);
                return $result;
                return true;
            }else{
                return false;
            }
        }

        public function register($username,$upassword,$email,$urole){
            $sql = "INSERT INTO `user_tb` (`id` , `username` , `upassword` ,`email` ,`urole`)
            VALUES ('',:username,:upassword,:email,:urole)";
            $query = $this->ConDB->prepare($sql);
            $query->bindParam(":username",$username);
            $query->bindParam(":upassword",$upassword);
            $query->bindParam(":email",$email);
            $query->bindParam(":urole",$urole);
            if( $query->execute()){
                return true;
            }else {
                return false;
            }

            
        }

        public function login($username,$upassword){
            $sql = "SELECT username FROM user_tb WHERE username = :username AND upassword = :upassword";
            $query = $this->ConDB->prepare($sql);
            $query->bindParam(":username",$username);
            $query->bindParam(":upassword",$upassword);
            if( $query->execute()){
                $result = $query->fetch(PDO::FETCH_ASSOC);
                return $result;
                return true;
            }else{
                return false;
            }
        }
        

    }



?>