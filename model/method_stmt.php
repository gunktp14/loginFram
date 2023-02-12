<?php
    class method_stmt{
        private $ConDB;

         public function __construct(){
             $con = new ConDB();
             $con->connect();
             $this->ConDB = $con->conn;
            }
        

        public function check_Email($email){
            $sql = "SELECT email FROM user_tb WHERE email = $email";
            $query = $this->ConDB->prepare($sql);
            if( $query->execute()){
                $result = $query->fetch(PDO::FECTH_ASSOC);
                return false;
            }else{
                return true;
            }
        }

    }



?>