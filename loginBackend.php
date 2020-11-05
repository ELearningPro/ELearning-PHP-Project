<?php
include('dbConfig.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $isEmailIsExists = "select * from user where email='$email'";
    $executeEmailQuery = mysqli_query($isConnectToDb, $isEmailIsExists);
    $isExists = mysqli_num_rows($executeEmailQuery);
    if ($isExists) {
        $dbRow = mysqli_fetch_assoc($executeEmailQuery);
        $status = $dbRow['status'];
        if ($status === "active") {
            $getPasswordFromDB = $dbRow['password'];
            $decodedPassword = password_verify($password, $getPasswordFromDB);
            if ($decodedPassword) {
                $_SESSION['username'] = $dbRow['user_name'];
                echo "LSS";
            } else {
                echo "PIC";
            }
        } else {
            echo 'ENV';
        }
    } else {
        echo 'ENVV';
    }
}