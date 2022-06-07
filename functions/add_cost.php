<?php
session_start();
	
if (!isset($_SESSION['zalogowany']))
{
    header('Location: index.php');
    exit();
}
require_once ('../includes/config.php');

$directory= "img/";
$fileName = basename($_FILES["file"]["name"]);
$targetfilepath = $directory . $fileName;
$filetype = pathinfo($targetfilepath,PATHINFO_EXTENSION);


$name=$_POST['name'];
$number=$_POST['number'];
$price=$_POST['price'];

$conn = new mysqli($servername, $username, $password, $db_name);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $checkboxes = isset($_POST['checkbox']) ? $_POST['checkbox'] : array();
  if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetfilepath))
  {
    foreach($checkboxes as $value) {
      $sql = "INSERT INTO `costumes` (`id_product`, `number`, `name_costume`, `size`, `price`, `quantity`, `category_id`, `img`) VALUES (0, '$number', '$name', '$value', '$price', '1', 'strój', '$filename')";
      if($conn->query($sql))
      {
          header('location: ../list.php');
      }
    }
  }



?>