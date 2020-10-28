<?php
    if(isset($_POST['createAccount'])){
        $userName=mysqli_real_escape_string($isConnectToDb,$_POST['userFirstName'].' '.$_POST['userLastName']);
        $userMobileNumber=mysqli_real_escape_string($isConnectToDb,$_POST['userMobileNumber']);
        $email=mysqli_real_escape_string($isConnectToDb,$_POST['userEmail']);
        $password=mysqli_real_escape_string($isConnectToDb,$_POST['userPassword']);
        $confirmPassword=mysqli_real_escape_string($isConnectToDb,$_POST['userConfirmPassword']);
        $encryptedPassword=password_hash($password,PASSWORD_BCRYPT);
        $encryptedConnfirmPassword=password_hash($confirmPassword,PASSWORD_BCRYPT);
        $emailQuery="select * from user where email='$email'";
        $query=mysqli_query($isConnectToDb,$emailQuery);
        $isEmail=mysqli_num_rows($query);
        if($isEmail>0){
            echo "Email already exist";
        }else{
            if($password===$confirmPassword){
                    $token=bin2hex(random_bytes(15));
                    $insertQuery="insert into user(user_name,email,mobile_number,password,confirmation_password,token,status) values('$userName','$email','$userMobileNumber','$encryptedPassword','$encryptedConnfirmPassword','$token','in-active')";
                    $inserting=mysqli_query($isConnectToDb,$insertQuery);
                    if($inserting){
                        $subject = "Email Activation - eLearning";
                        $body = "Hi, $userName. Click Here to activate your eLearning account http://localhost/ELearning-Project/email-varification.php?token=$token";
                        $sent_from = "From: joesmith.me@gmail.com";
                        if (mail( $email, $subject, $body, $sent_from)) {
                            $_SESSION['varification_msg']="Check your mail to activate your account $email";
                           header('location:login.php');
                        } else {
                            echo "Email sending failed...";
                        }
                    }else{
                        ?>
<script>
alert("not inserted");
</script>
<?php
                        
                    }
            }
            else{
                ?>
<script>
document.getElementById("invalid-password").innerHTML = "Password not match";
</script>
<?php
            }
        } 
    }
?>