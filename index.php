<?php
session_start();
include("dbConfig.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FontAwesome Css -->
    <link rel="stylesheet" href="css/all.min.css">
    <title>E-Learning</title>
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php include('Covid19Data.php') ?>
    <div class="container-fluid">
        <?php include("header.php") ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php include("slider.php") ?>
                </div>
            </div>
            <div class="row mx-0 py-2 bg-warning align-items-center">
                <div class="col-12 col-sm-6 col-md-3 my-2">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-book-open text-light"></i>
                        <span class="pl-2">100+ online courses</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 my-2">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-user-graduate text-light"></i>
                        <span class="pl-2">Expert Instructors</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 my-2">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-key text-light"></i>
                        <span class="pl-2">Lifetime Access</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 my-2">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-rupee-sign text-light"></i>
                        <span class="pl-2">Money back guaranty*</span>
                    </div>
                </div>
            </div>
            <?php
            include("courses.php");
            include("contactMe.php");
            include("studentFeedback.php");
            ?>
        </div>
        <?php include("footer.php") ?>

    </div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

</html>