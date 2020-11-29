<?php
include("../../dbConfig.php");
$query = "select uid,user_name,email,mobile_number from user";
$executedQuery = mysqli_query($isConnectToDb, $query);
$data = [];
while ($row = mysqli_fetch_assoc($executedQuery)) {
    array_push($data, (object)[
        'id' => $row['uid'],
        'user_name' => $row['user_name'],
        'email' => $row['email'],
        'mobile_number' => $row['mobile_number'],
    ]);
}
print_r(json_encode($data));
