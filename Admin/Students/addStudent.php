<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../assets/images/logo.png" type="image/x-icon">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- FontAwesome Css -->
    <link rel="stylesheet" href="../../css/all.min.css">
    <title>Add Student</title>
    <style>
        .form-control.isInvalid,
        .form-control-file.isInvalid {
            color: red !important;
            border-color: red !important;
        }

        .form-control.isInvalid+span,
        .form-control-file.isInvalid+span {
            display: block !important;
            color: red !important;
            font-size: 12px !important;
        }

        button:disabled {
            cursor: not-allowed;
        }
    </style>
</head>

<body class="vh-100">
    <?php include("../header.php") ?>
    <div class="row mx-0" style="height: inherit;">
        <?php include("../sidebar.php") ?>
        <div class="col-9">
            <div class="p-3 text-dark bg-light m-2 shadow-lg">
                <h2 class="text-center">
                    <u>
                        Add Student
                    </u>
                </h2>
                <div class='row mx-2 p-1'>
                    <form class="col-12" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-form-label">Student Name</label>
                            <input required onkeyup="isValid(event)" class="form-control" id="user_name" name="user_name">
                            <span class="d-none">Enter Valid User Name</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Email</label>
                            <input type="email" required onkeyup="isValid(event)" class="form-control" id="email" name="email">
                            <span class="d-none">Enter Valid Email Address</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Mobile Number</label>
                            <input onkeyup="isValid(event)" required class="form-control" id="mobile_number" name="mobile_number">
                            <span class="d-none">Enter Valid Mobile Number</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Student Password</label>
                            <input type="password" onkeyup="isValid(event)" required class="form-control" id="password" name="password">
                            <span class="d-none">Enter Valid Course Duration</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Confirm Password</label>
                            <input type="password" onkeyup="isValid(event)" required class="form-control" id="confirmation_password" name="confirmation_password">
                            <span class="d-none">Enter Valid Course Price</span>
                        </div>
                        <div class="p-3 text-right">
                            <button class="btn btn-sm btn-outline-danger" onclick="javascript:location.replace('index.php')" type="cancel">Cancel</button>
                            <button id="add_stud" disabled class="btn btn-sm btn-outline-warning px-3" type="submit" name="add_stud">Add</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/all.min.js"></script>
<script>
    const formData = {
        "user_name": "",
        "email": "",
        "mobile_number": "",
        "password": "",
        "confirmation_password": "",
    }
    const isValid = (event = false) => {
        let name, value;
        if (event) {
            name = event.target.name;
            value = event.target.value
        }
        formData[name] = value;
        let isCorrect = true;
        const {
            user_name,
            email,
            mobile_number,
            password,
            confirmation_password,
        } = formData;
        if (user_name.trim().length >= 3) {
            isCorrect = isCorrect && true;
            document.getElementById("user_name").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            document.getElementById("user_name").classList.add("isInvalid")
        }
        if (email.trim().length >= 3) {
            isCorrect = isCorrect && true;
            document.getElementById("email").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            document.getElementById("email").classList.add("isInvalid")
        }
        if (mobile_number.trim().length === 10) {
            isCorrect = isCorrect && true;
            document.getElementById("mobile_number").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            document.getElementById("mobile_number").classList.add("isInvalid")
        }
        if (password.trim().length > 8) {
            isCorrect = isCorrect && true;
            document.getElementById("password").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            document.getElementById("password").classList.add("isInvalid")
        }
        if (confirmation_password.trim() === password) {
            isCorrect = isCorrect && true;
            document.getElementById("confirmation_password").classList.remove("isInvalid")
        } else {
            isCorrect = isCorrect && false
            document.getElementById("confirmation_password").classList.add("isInvalid")
        }
        if (isCorrect) {
            document.getElementById("add_stud").disabled = false;
        }
    }
</script>

</html>

<?php
include("../../dbConfig.php");
if (isset($_REQUEST["add_stud"])) {
    $user_name = $_REQUEST['user_name'];
    $email = $_REQUEST['email'];
    $mobile_number = $_REQUEST['mobile_number'];
    $password = $_REQUEST['password'];
    $confirmation_password = $_REQUEST['confirmation_password'];
    $isCorrect = true;
    if (strlen(trim($user_name)) < 2) {
        $isCorrect = $isCorrect && false;
        echo '<script>document.getElementById("user_name").classList.remove("isInvalid")</script>';
    }
    if (strlen(trim($email)) < 2) {
        $isCorrect = $isCorrect && false;
        echo '<script>document.getElementById("email").classList.remove("isInvalid")</script>';
    }
    if (strlen(trim($mobile_number)) == 10) {
        $isCorrect = $isCorrect && false;
        echo '<script>document.getElementById("mobile_number").classList.remove("isInvalid")</script>';
    }
    if (strlen(trim($password)) < 8) {
        $isCorrect = $isCorrect && false;
        echo '<script>document.getElementById("password").classList.remove("isInvalid")</script>';
    }
    if (strlen(trim($password)) != strlen(trim($confirmation_password))) {
        $isCorrect = $isCorrect && false;
        echo '<script>document.getElementById("password").classList.remove("isInvalid")</script>';
    }
    if ($isCorrect) {
        $userName = mysqli_real_escape_string($isConnectToDb, $user_name);
        $mobileNumber = mysqli_real_escape_string($isConnectToDb, $mobile_number);
        $email = mysqli_real_escape_string($isConnectToDb, $email);
        $password_1 = mysqli_real_escape_string($isConnectToDb, $password);
        $confirmPassword = mysqli_real_escape_string($isConnectToDb, $confirmation_password);
        $encryptedPassword = password_hash($password, PASSWORD_BCRYPT);
        $encryptedConnfirmPassword = password_hash($confirmPassword, PASSWORD_BCRYPT);
        $emailQuery = "select * from user where email='$email'";
        $query = mysqli_query($isConnectToDb, $emailQuery);
        $isEmail = mysqli_num_rows($query);
        if ($isEmail > 0) {
            echo "EAE";
        } else {
            $token = bin2hex(random_bytes(15));
            $query = "insert into user(user_name,email,mobile_number,password,confirmation_password,token,status) values('$userName','$email','$mobileNumber','$encryptedPassword','$encryptedConnfirmPassword','$token','in-active')";
            $inserting = mysqli_query($isConnectToDb, $query);
            if ($inserting) {
                $subject = "Email Activation - eLearning";
                $body = "Hi, $userName. Click Here to activate your eLearning account http://localhost/ELearning-Project/email-varification.php?token=$token";
                $sent_from = "From:elearning20.info@gmail.com";
                if(mail($email, $subject, $body, $sent_from)){
                    echo "<script>location.replace('index.php')</script>";
                }
            }
        }
    }
}
?>