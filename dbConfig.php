<?php
// Database Connection
$isConnectToDb = mysqli_connect("localhost", "root", "", "elearning");

// Check if database exists or server is no
if (!$isConnectToDb) {
    exit();
}