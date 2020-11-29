<?php
include("../../dbConfig.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course_name = $_POST["course_name"];
    $course_desc = $_POST["course_desc"];
    $course_price = $_POST["course_price"];
    $course_original_price = $_POST["course_original_price"];
    $course_duration = $_POST["course_duration"];
    $course_author = $_POST["course_author"];
    $id = $_POST['id'];
    $query = "update courses set course_name='$course_name',course_author='$course_author',course_duration='$course_duration',course_desc='$course_desc',course_price='$course_price',course_original_price='$course_original_price' where course_id='$id'";
    $executedQuery = mysqli_query($isConnectToDb, $query);
    if ($executedQuery) {
        echo json_encode(array('message' => 'Course Updated', 'status' => true));
    } else {
        echo json_encode(array('message' => 'Course Not Updated', 'status' => false));
    }
}