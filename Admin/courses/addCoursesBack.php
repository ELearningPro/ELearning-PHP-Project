<?php
include("../../dbConfig.php");

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');


if (isset($_SERVER["REQUEST_METHOD"]) == "POST") {
    print_r($_POST);
    $course_name = $_POST['course_name'];
    $course_desc = $_POST['course_desc'];
    $course_author = $_POST['course_author'];
    $course_duration = $_POST['course_duration'];
    $course_price = $_POST['course_price'];
    $course_original_price = $_POST['course_original_price'];
    // $course_img = $_FILES['course_img']['name'];
    // $course_img_tmp = $_FILES['course_img']['tmp_name'];
    // $imgFolder = '../../assets/CoursesImage/' . $course_img;
    // move_uploaded_file($course_img_tmp, $imgFolder);
    // $query = "insert into courses(course_name,course_desc,course_author,course_img,course_duration,course_price,course_original_price) values('$course_name','$course_desc','$course_author','$course_img','$course_duration','$course_price','$course_original_price')";
    // $inserting = mysqli_query($isConnectToDb, $query);
    // if ($inserting) {
    //     echo json_encode(array('message' => 'Course Add', 'status' => true));
    // } else {
    //     echo json_encode(array('message' => 'Course Not Add', 'status' => false));
    // }
}