<?php
include ('config.php');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$conn->set_charset("utf8");
if($conn->connect_error){
    die("connection_failed: " . $conn->connect_error);
}


?>