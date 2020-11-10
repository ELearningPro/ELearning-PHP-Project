<?php
include("../dbConfig.php");
if (isset($_REQUEST["ADD_COURSE"])) {
    $course_name = $_REQUEST['course_name'];
    $course_desc = $_REQUEST['course_desc'];
    $course_author = $_REQUEST['course_author'];
    $course_duration = $_REQUEST['course_duration'];
    $course_price = $_REQUEST['course_price'];
    $course_original_price = $_REQUEST['course_original_price'];
    $course_img = $_FILES['course_img']['name'];
    $course_img_tmp = $_FILES['course_img']['tmp_name'];
    $imgFolder = '../assets/CoursesImage/' . $course_img;
    move_uploaded_file($course_img_tmp, $imgFolder);
    $query = "insert into courses(course_name,course_desc,course_author,course_img,course_duration,course_price,course_original_price) values('$course_name','$course_desc','$course_author','$course_img','$course_duration','$course_price','$course_original_price')";
    echo $query;
    $inserting = mysqli_query($isConnectToDb, $query);
    if ($inserting) {
        header('location:courses.php');
    }
    echo mysqli_error($isConnectToDb);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/logo.png" type="image/x-icon">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- FontAwesome Css -->
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Add Course</title>
</head>

<body class="vh-100">
    <?php include("header.php") ?>
    <div class="row mx-0" style="height: inherit;">
        <?php include("sidebar.php") ?>
        <div class="col-9">
            <div class="p-3 text-dark bg-light m-2 shadow-lg">
                <h2 class="text-center">
                    <u>
                        Add Course
                    </u>
                </h2>
                <div class='row mx-2 p-1'>
                    <form class="col-12" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-form-label">Course Name</label>
                            <input class="form-control" id="course_name" name="course_name">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Course Description</label>
                            <textarea class="form-control" id="course_desc" name="course_desc"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Author</label>
                            <input class="form-control" id="course_author" name="course_author">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Course Duration</label>
                            <input class="form-control" id="course_duration" name="course_duration">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Course Original Price</label>
                            <input class="form-control" id="course_original_price" name="course_original_price">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Course Selling Price</label>
                            <input class="form-control" id="course_price" name="course_price">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Featured Image</label>
                            <input placeholder="Upload Image" type="file" accept=".jpg,.png,.jpeg" class="form-control-file" id="course_img" name="course_img">
                        </div>
                        <div class="p-3 text-right">
                            <button class="btn btn-sm btn-outline-danger" type="cancel">Cancel</button>
                            <button class="btn btn-sm btn-outline-warning px-3" type="submit" name="ADD_COURSE">Add</button>
                        </div>
                    </form>
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