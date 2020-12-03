<?php
include('dbConfig.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $isEmailIsExists = "select * from user where email='$email'";
    $executeEmailQuery = mysqli_query($isConnectToDb, $isEmailIsExists);
    $isExists = mysqli_num_rows($executeEmailQuery);
    if ($isExists) {
        session_start();
        if (isset($_POST["password"]) && (isset($_SESSION['forgot-token']) == isset($_POST['token']))) {
            $password = mysqli_real_escape_string($isConnectToDb, $_POST['password']);
            $confirmPassword = mysqli_real_escape_string($isConnectToDb, $_POST['password']);
            $encryptedPassword = password_hash($password, PASSWORD_BCRYPT);
            $encryptedConnfirmPassword = password_hash($confirmPassword, PASSWORD_BCRYPT);
            $passConfirmation = "update user set password='$encryptedPassword',confirmation_password='$encryptedConnfirmPassword' where email='$email'";
            $executeQuery = mysqli_query($isConnectToDb, $passConfirmation);
            if (mysqli_affected_rows($isConnectToDb)) {
                echo "PCS";
                $_SESSION['forgot-token'] = false;
                // echo mysqli_error($isConnectToDb);
            }
        } else {
            if (isset($_POST['isForgot'])) {

                $dbRow = mysqli_fetch_assoc($executeEmailQuery);
                $status = $dbRow['status'];
                if ($status === "active") {
                    $userName = $dbRow['user_name'];
                    $subject = "Forgot Password - eLearning";
                    $token = bin2hex(random_bytes(15));
                    $body = "Hi, $userName. Click Here to change your eLearning account password http://localhost/ELearning-Project/forgotPassword.php?token=$token";
                    $sent_from = "From:elearning20.info@gmail.com";
                    if (mail($email, $subject, $body, $sent_from)) {
                        $_SESSION['forgot-token'] = $token;
                        $_SESSION['forgot_msg'] = "Check your mail to change your account $email password";
                        echo json_encode(array('message' => 'Email Send Successfully,Check your Mail '.$email, 'status' => true));
                    } else {
                        echo "MSF";
                    }
                } else {
                    echo 'SNV';
                }
            }
        }
    } else {
        echo 'EEA';
    }
}
