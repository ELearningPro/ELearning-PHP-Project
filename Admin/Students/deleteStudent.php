<?php
include("../../dbConfig.php");
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);
$id = $data;
$query = "delete from user where uid='$id'";
$executedQuery = mysqli_query($isConnectToDb, $query);
if ($executedQuery) {
    echo json_encode(array('message' => 'User Updated', 'status' => true));
} else {
    echo json_encode(array('message' => 'User Not Updated', 'status' => false));
}
?>