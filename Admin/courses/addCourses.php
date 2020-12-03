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
    <title>Add Course</title>
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
                        Add Courses
                    </u>
                </h2>
                <div class='row mx-2 p-1'>
                    <form class="col-12" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-form-label">Course Name</label>
                            <input required onkeyup="isValid(event)" class="form-control" id="course_name"
                                name="course_name">
                            <span class="d-none">Enter Valid Course Name</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Course Description</label>
                            <textarea required onkeyup="isValid(event)" class="form-control" id="course_desc"
                                name="course_desc"></textarea>
                            <span class="d-none">Enter Valid Course Description</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Author</label>
                            <input onkeyup="isValid(event)" required class="form-control" id="course_author"
                                name="course_author">
                            <span class="d-none">Enter Valid Course Author Name</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Course Duration</label>
                            <input onkeyup="isValid(event)" required class="form-control" id="course_duration"
                                name="course_duration">
                            <span class="d-none">Enter Valid Course Duration</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Course Original Price</label>
                            <input type="number" onkeyup="isValid(event)" required class="form-control"
                                id="course_original_price" name="course_original_price">
                            <span class="d-none">Enter Valid Course Price</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Course Selling Price</label>
                            <input onkeyup="isValid(event)" type="number" required class="form-control"
                                id="course_price" name="course_price">
                            <span class="d-none">Enter Valid Course Price</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Featured Image</label>
                            <input onchange="isValid(event)" required placeholder="Upload Image" type="file"
                                accept=".jpg,.png,.jpeg" class="form-control-file" id="course_img" name="course_img">
                            <span class="d-none">Please Select Feature Image</span>
                        </div>
                        <div class="p-3 text-right">
                            <button class="btn btn-sm btn-outline-danger" type="cancel">Cancel</button>
                            <button id="add_course" disabled class="btn btn-sm btn-outline-warning px-3" type="submit"
                                name="ADD_COURSE">Add</button>
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
    "course_name": "",
    "course_desc": "",
    "course_author": "",
    "course_duration": "",
    "course_original_price": "",
    "course_price": "",
    "course_img": ""
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
        course_name,
        course_desc,
        course_author,
        course_duration,
        course_original_price,
        course_price,
        course_img
    } = formData;
    if (course_name.trim().length >= 3) {
        isCorrect = isCorrect && true;
        document.getElementById("course_name").classList.remove("isInvalid")
    } else {
        isCorrect = isCorrect && false
        document.getElementById("course_name").classList.add("isInvalid")
    }
    if (course_desc.trim().length >= 3) {
        isCorrect = isCorrect && true;
        document.getElementById("course_desc").classList.remove("isInvalid")
    } else {
        isCorrect = isCorrect && false
        document.getElementById("course_desc").classList.add("isInvalid")
    }
    if (course_author.trim().length >= 2) {
        isCorrect = isCorrect && true;
        document.getElementById("course_author").classList.remove("isInvalid")
    } else {
        isCorrect = isCorrect && false
        document.getElementById("course_author").classList.add("isInvalid")
    }
    if (course_duration.trim().length >= 1) {
        isCorrect = isCorrect && true;
        document.getElementById("course_duration").classList.remove("isInvalid")
    } else {
        isCorrect = isCorrect && false
        document.getElementById("course_duration").classList.add("isInvalid")
    }
    if (course_original_price.trim().length >= 1) {
        isCorrect = isCorrect && true;
        document.getElementById("course_original_price").classList.remove("isInvalid")
    } else {
        isCorrect = isCorrect && false
        document.getElementById("course_original_price").classList.add("isInvalid")
    }
    if (course_price.trim().length >= 1) {
        isCorrect = isCorrect && true;
        document.getElementById("course_price").classList.remove("isInvalid")
    } else {
        isCorrect = isCorrect && false
        document.getElementById("course_price").classList.add("isInvalid")
    }
    if (course_img) {
        isCorrect = isCorrect && true;
        document.getElementById("course_img").classList.remove("isInvalid")
    } else {
        isCorrect = isCorrect && false
        document.getElementById("course_img").classList.add("isInvalid")
    }
    if (isCorrect) {
        document.getElementById("add_course").disabled = false;
    }
}
</script>

</html>

<?php
include("../../dbConfig.php");
if (isset($_REQUEST["ADD_COURSE"])) {
    $course_name = $_REQUEST['course_name'];
    $course_desc = $_REQUEST['course_desc'];
    $course_author = $_REQUEST['course_author'];
    $course_duration = $_REQUEST['course_duration'];
    $course_price = $_REQUEST['course_price'];
    $course_original_price = $_REQUEST['course_original_price'];
    $course_img = $_FILES['course_img']['name'];
    $isCorrect = true;
    if (strlen(trim($course_name)) < 2) {
        $isCorrect = $isCorrect && false;
        echo '<script>document.getElementById("course_name").classList.remove("isInvalid")</script>';
    }
    if (strlen(trim($course_desc)) < 2) {
        $isCorrect = $isCorrect && false;
        echo '<script>document.getElementById("course_desc").classList.remove("isInvalid")</script>';
    }
    if (strlen(trim($course_author)) < 2) {
        $isCorrect = $isCorrect && false;
        echo '<script>document.getElementById("course_author").classList.remove("isInvalid")</script>';
    }
    if (strlen(trim($course_duration)) < 2) {
        $isCorrect = $isCorrect && false;
        echo '<script>document.getElementById("course_duration").classList.remove("isInvalid")</script>';
    }
    if ($isCorrect) {
        $course_img_tmp = $_FILES['course_img']['tmp_name'];
        $imgFolder = '../../assets/CoursesImage/' . $course_img;
        move_uploaded_file($course_img_tmp, $imgFolder);
        $query = "insert into courses(course_name,course_desc,course_author,course_img,course_duration,course_price,course_original_price) values('$course_name','$course_desc','$course_author','$course_img','$course_duration','$course_price','$course_original_price')";
        $inserting = mysqli_query($isConnectToDb, $query);
        if ($inserting) {
            echo "<script>location.replace('index.php')</script>";
        }
    }
}
?>