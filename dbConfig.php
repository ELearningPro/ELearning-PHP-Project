<?php
// Database Connection
$isConnectToDb = mysqli_connect("localhost", "root", "");

// Check if database exists or server is no
$sql = "select schema_name from information_schema.schemata where schema_name ='elearning'";
if (!$isConnectToDb) {
    exit();
}
if (!mysqli_num_rows(mysqli_query($isConnectToDb, $sql))) {
    $sql = "CREATE DATABASE IF NOT EXISTS elearning";
    if (mysqli_query($isConnectToDb, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($isConnectToDb);
    }
}
mysqli_close($isConnectToDb);
$isConnectToDb = mysqli_connect("localhost", "root", "", "elearning");
if (!$isConnectToDb) {
    exit();
} else {
    $queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `user` (
    `uid` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
)";
$create=mysqli_query($isConnectToDb,$queryCreateUsersTable);
    $queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `student_feedback` (
   `pvid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL
)";
    $create = mysqli_query($isConnectToDb, $queryCreateUsersTable);

    $queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL,
  `course_author` varchar(255) NOT NULL,
  `course_img` text NOT NULL,
  `course_duration` text NOT NULL,
  `course_price` varchar(11) NOT NULL,
  `course_original_price` varchar(11) NOT NULL
)";
    $create = mysqli_query($isConnectToDb, $queryCreateUsersTable);
}


mysqli_query($isConnectToDb, $query);