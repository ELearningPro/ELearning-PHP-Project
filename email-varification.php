<?php

session_start();
include('dbConfig.php');
if(isset($_GET['token'])){
    $token=$_GET['token'];
    $activation="update user set status='active' where token='$token'";
    $executeQuery=mysqli_query($isConnectToDb,$activation);
    if($executeQuery){
            $_SESSION['varification_msg']="Account Activated.";
            header('location:login.php');
    }else{
        echo "c";
        $_SESSION['varification_msg']="Account not Activate";
        header('location:signup.php');
    }
}

?>