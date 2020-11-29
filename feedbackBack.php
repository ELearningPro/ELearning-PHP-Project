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
}
?>