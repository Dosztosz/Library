<?php
    session_start();
        
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }
    require_once ('../includes/config.php');

    $id = $_GET['id'];
    $status = $_GET['status'];

    $conn = new mysqli ($servername, $username, $password, $db_name);
    $conn->set_charset("utf8");
    if($conn->connect_error){
        die("connection error: " . $conn->connect_error);
    }
    else {
        $conn->query("UPDATE `rentals` SET `status` = '$status' WHERE `id` = $id;");
        header('Location: ../rented.php');
    }






?>