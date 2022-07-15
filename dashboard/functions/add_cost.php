<?php
session_start();
	
if (!isset($_SESSION['zalogowany']))
{
    header('Location: index.php');
    exit();
}
require_once ('../includes/config.php');


if(isset($_FILES['image'])){
  $errors= array();
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
  
  $extensions= array("jpeg","jpg","png");
  
  if(in_array($file_ext,$extensions)=== false){
     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
  }
  
  if($file_size > 2097152) {
     $errors[]='File size must be excately 2 MB';
  }
  
  if(empty($errors)==true) {
     move_uploaded_file($file_tmp,"../img/".$file_name);
     echo "Success";
  }else{
     print_r($errors);
  }
}


$name=$_POST['name'];
$number=$_POST['number'];
$price=$_POST['price'];

$conn = new mysqli($servername, $username, $password, $db_name);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $checkboxes = isset($_POST['checkbox']) ? $_POST['checkbox'] : array();
    foreach($checkboxes as $value) {
      $sql = "INSERT INTO `costumes` (`id_product`, `number`, `name_costume`, `size`, `price`, `quantity`, `category_id`, `img`) VALUES (0, '$number', '$name', '$value', '$price', '1', 'strój', '$file_name')";
      if($conn->query($sql))
      {
          header('location: ../list.php');
      }
    }



?>