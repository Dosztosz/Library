<?php
session_start();
	
if (!isset($_SESSION['zalogowany']))
{
    header('Location: index.php');
    exit();
}
require_once ('../includes/config.php');

$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "SELECT * FROM rentals";
$results = $conn->query($sql);

if(isset($_POST['name'])){
    echo    'tak działa byczqu';
    echo $_POST['name'];
    echo $_POST['phone'];
    echo $_POST['address'];
    echo $_POST['dateorder'];
    echo $_POST['datereturn'];
}
else {
    echo    'nie to nie tak byczqu';
}



?>