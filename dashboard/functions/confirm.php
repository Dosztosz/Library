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
    $costume_id = $_GET['product'];

    $conn = new mysqli ($servername, $username, $password, $db_name);
    $conn->set_charset("utf8");
    if($conn->connect_error){
        die("connection error: " . $conn->connect_error);
    }
    else {
        $conn->query("UPDATE `rentals` SET `status` = '$status' WHERE `id_rent` = $id;");
        $conn->query("UPDATE `costumes` SET `quantity` = `quantity` +1 WHERE `costumes`.`id_product` = $costume_id;");
        header('Location: ../rented.php');
    }






?>