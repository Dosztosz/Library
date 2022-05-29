<?php
session_start();
	
if (!isset($_SESSION['zalogowany']))
{
    header('Location: index.php');
    exit();
}
require_once ('../includes/config.php');

$conn = new mysqli($servername, $username, $password, $db_name);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$orderdate = $_POST['dateorder'];
$datereturn = $_POST['datereturn'];
$costume = $_POST['costume_id'];
$price = $_POST['price'];

$sql = "INSERT INTO rentals (id, name, date_rent, date_return, costume_id, price, phone, address, status) VALUES ('0', '$name', '$orderdate', '$datereturn', '$costume', '$price', '$phone', '$address', 'rented')"; 

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>