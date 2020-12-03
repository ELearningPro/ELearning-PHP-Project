<?php
include('dbConfig.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $isEmailIsExists = "select * from user where email='$email'";
    $executeEmailQuery = mysqli_query($isConnectToDb, $isEmailIsExists);
    $isExists = mysqli_num_rows($executeEmailQuery);
    echo mysqli_error($isConnectToDb);
    if ($isExists) {
        $dbRow = mysqli_fetch_assoc($executeEmailQuery);
        $status = $dbRow['status'];
        if ($status === "active") {
            $userData=[];
            array_push($userData, (object)[
                'id' => $dbRow['uid'],
                'user_name' => $dbRow['user_name'],
                'email' => $dbRow['email'],
                'mobile_number' => $dbRow['mobile_number'],
            ]);
            $getPasswordFromDB = $dbRow['password'];
            $decodedPassword = password_verify($password, $getPasswordFromDB);
            if ($decodedPassword) {
                session_start();
                $_SESSION['userId'] = $dbRow['uid'];
                echo json_encode(array('message' => 'Login Success', 'status' => true,'user'=> $userData));
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