<?php
include_once("dbConfig.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = mysqli_real_escape_string($isConnectToDb, $_POST['firstName'] . ' ' . $_POST['lastName']);
    $mobileNumber = mysqli_real_escape_string($isConnectToDb, $_POST['mobileNumber']);
    $email = mysqli_real_escape_string($isConnectToDb, $_POST['email']);
    $password = mysqli_real_escape_string($isConnectToDb, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($isConnectToDb, $_POST['confirmPassword']);
    $encryptedPassword = password_hash($password, PASSWORD_BCRYPT);
    $encryptedConnfirmPassword = password_hash($confirmPassword, PASSWORD_BCRYPT);
    $emailQuery = "select * from user where email='$email'";
    $query = mysqli_query($isConnectToDb, $emailQuery);
    $isEmail = mysqli_num_rows($query);
    if ($isEmail > 0) {
        echo "EAE";
    } else {
        if ($password === $confirmPassword) {
            $token = bin2hex(random_bytes(15));
            $insertQuery = "insert into user(user_name,email,mobile_number,password,confirmation_password,token,status) values('$userName','$email','$mobileNumber','$encryptedPassword','$encryptedConnfirmPassword','$token','in-active')";
            $inserting = mysqli_query($isConnectToDb, $insertQuery);
            if ($inserting) {
                $subject = "Email Activation - eLearning";
                $body = "Hi, $userName. Click Here to activate your eLearning account http://localhost/ELearning-Project/email-varification.php?token=$token";
                $sent_from = "From:elearning20.info@gmail.com";
                if (mail($email, $subject, $body, $sent_from)) {
                    $_SESSION['varification_msg'] = "Check your mail to activate your account $email";
                    echo "ESS";
                } else {
                    echo "ESF";
                }
            } else {
                echo "RIF";
            }
        } else {
            echo "PNM";
        }
    }
}