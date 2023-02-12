<?php
    session_start();
    include_once '../model/connect.php';
    include_once '../model/method_stmt.php';
    $obj= new method_stmt();
    
    if(isset($_POST['sign_up'])){
        echo("submited");
        $username = $_POST['username'];
        $upassword = $_POST['upassword'];
        $cpassword = $_POST['cpassword'];
        $email = $_POST['email'];
        $urole = "user";
        
        if(empty($username)){
            $_SESSION['Error'] = "กรุณากรอก username";
            echo("username");
        }else if(empty($upassword)){
            $_SESSION['Error'] = "กรุณากรอก password";
            echo("password");
        }else if(strlen($upassword) < 5 ||strlen($upassword) > 20){
            $_SESSION['Error'] = "รหัสผ่านต้องอยู่ระหว่าง 5 - 20";
            echo("รหัสผ่านต้องอยู่ระหว่าง 5-20");
        }else if(empty($email)){
            $_SESSION['Error'] = "กรุณากรอก Email";
            echo("email");
        }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $_SESSION['Error'] = "กรุณากรอก Email ให้ถูกต้อง";
            echo("กรุณากรอก Email ให้ถูกต้อง");
        }else{
            $rs2 = $obj->check_Email($email);
            if($rs2 == false){
                echo("มี Email อยู่เเล้วในระบบ");
            }else{
                echo("ดำเนินการต่อได้");
            }
        }

    }else{
        echo("มีควยไรสัส");
    }



?>