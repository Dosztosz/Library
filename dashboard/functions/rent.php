<?php
require_once ('../../database/config.php');
require_once ('../../database/connect.php');
session_start();
	
if (!isset($_SESSION['zalogowany']))
{
    header('Location: index.php');
    exit();
}


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$costume_id = $_POST['costume_id'];
$size = $_POST['size'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$orderdate = $_POST['dateorder'];
$datereturn = $_POST['datereturn'];
$costume = $_POST['costume_id'];
$price = $_POST['price'];

$sql = "INSERT INTO rentals (id_rent, name, date_rent, date_return, costume_id, size, price, phone, address, status) VALUES ('0', '$name', '$orderdate', '$datereturn', '$costume', '$size', '$price', '$phone', '$address', 'rented')"; 
$sqli = "UPDATE `costumes` SET `quantity` = `quantity` -1 WHERE `costumes`.`product_id` = $costume_id;";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    if ($conn->query($sqli) === TRUE) {
      header ('location: ../rented.php');
    }
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>