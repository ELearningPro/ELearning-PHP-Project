<?php
include("../../dbConfig.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $id = $_POST['id'];
    $query = "update user set user_name='$user_name',email='$email',mobile_number='$mobile_number' where uid='$id'";
    $executedQuery = mysqli_query($isConnectToDb, $query);
    if ($executedQuery) {
        echo json_encode(array('message' => 'Student Updated', 'status' => true));
    } else {
        echo json_encode(array('message' => 'Student Not Updated', 'status' => false));
    }
}
