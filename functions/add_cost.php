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

$sql = "SELECT * FROM costumes";
$results = $conn->query($sql);

if(isset($_POST['name'])){
    echo    'tak działa byczqu';
}
else {
    echo    'nie to nie tak byczqu';
}



?>