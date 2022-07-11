<?php
$product = $_GET['product'];
include('functions/connect.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$results = $conn->query($sql);


?>