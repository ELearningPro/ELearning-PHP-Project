<?php
include("../dbConfig.php");
$data=[];
$query = "select COUNT(*) as 'total' from courses";
$executedQuery = mysqli_query($isConnectToDb, $query);
$courses = mysqli_fetch_assoc($executedQuery);
array_push($data,["total"=>$courses['total'], "type" => "Courses"]);

$query = "select COUNT(*) as 'total' from user";
$executedQuery = mysqli_query($isConnectToDb, $query);
$user = mysqli_fetch_assoc($executedQuery);
array_push($data,["total" => $user['total'],"type"=>"Users"]);

$query = "select COUNT(*) as 'total' from student_feedback";
$executedQuery = mysqli_query($isConnectToDb, $query);
$feed = mysqli_fetch_assoc($executedQuery);
array_push($data,["total" => $feed['total'], "type" => "Student Feedback"]);

print_r(json_encode($data));
?>
