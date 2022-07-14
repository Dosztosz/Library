<?php
    $product = $_GET['product'];
    include ('../database/session_admin.php');
    require_once ('../database/config.php');
    require_once ('../database/connect.php');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$results = $conn->query($sql);
?>