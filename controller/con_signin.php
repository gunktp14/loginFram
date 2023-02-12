<?php
    session_start();
    include_once '../model/connect.php';
    include_once '../model/method_stmt.php';
    $obj = new method_stmt();

    $username = $_POST['username'];
    $upassword = $_POST['upassword'];

    $rs2 = $obj->login($username,$upassword);
    if($rs2){
        $_SESSION['success'] ="คุณได้ทำการเข้าสู่ระบบ เป็นที่เรียบร้อยเเล้ว";
        header("location: ../view/role/user.php");
    }else{
        $_SESSION['error'] = "username หรือ password ของคุณไม่ถูกต้อง";
        header("location: ../signin.php");
    }

?>