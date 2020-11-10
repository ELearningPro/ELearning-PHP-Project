<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- FontAwesome Css -->
    <link rel="stylesheet" href="../css/all.min.css">
    <title>E-Learning</title>
    <link rel="icon" href="../assets/images/logo.png" type="image/x-icon">
    <style>
    .card {
        cursor: pointer;
        transition: 0.4s all;
    }

    .card:hover {
        box-shadow: 0 0 6px 3px #ccc !important;
    }
    </style>

    <title>eLearning Admin Panel</title>
</head>

<body class="vh-100">
    <?php include("header.php") ?>
    <div class="row mx-0" style="height: inherit;">
        <?php include("sidebar.php") ?>
        <div class="col-9">
            <div class="p-4 d-flex flex-wrap flex-grow-1">
                <div class="card m-2 shadow-lg px-5 py-4 flex-grow-1 text-center">
                    <h4>Courses</h4>
                    <h5>8</h5>
                    <span>View</span>
                </div>
                <div class="card m-2 shadow-lg px-5 py-4 flex-grow-1 text-center">
                    <h4>Students</h4>
                    <h5>8</h5>
                    <span>View</span>
                </div>
                <div class="card m-2 shadow-lg px-5 py-4 flex-grow-1 text-center">
                    <h4>Sold</h4>
                    <h5>8</h5>
                    <span>View</span>
                </div>
                <div class="card m-2 shadow-lg px-5 py-4 flex-grow-1 text-center">
                    <h4>USERS</h4>
                    <h5>8</h5>
                    <span>View</span>
                </div>
                <div class="card m-2 shadow-lg px-5 py-4 flex-grow-1 text-center">
                    <h4>Admin Users</h4>
                    <h5>8</h5>
                    <span>View</span>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>

</html>