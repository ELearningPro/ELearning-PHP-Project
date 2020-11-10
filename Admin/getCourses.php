<?php
include("../dbConfig.php");
$query = "select course_name,course_desc,course_author,course_price,course_original_price from courses";
$executedQuery = mysqli_query($isConnectToDb, $query);
$data = [];
while ($row = mysqli_fetch_assoc($executedQuery)) {
    array_push($data, (object)[
        'course_name' => $row['course_name'],
        'course_author' => $row['course_author'],
        'course_price' => $row['course_price'],
        'course_original_price' => $row['course_original_price'],
    ]);
}
print_r(json_encode($data));
