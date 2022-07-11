<?php
include ('session.php');
include ('connect.php');

/*Line to including photos to the products with database*/
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
$checkboxes = isset($_POST['checkbox']) ? $_POST['checkbox'] : array();

/* Creating loop to insert into database product with all enabled checkboxes */
    foreach($checkboxes as $value) {
      $sql = "INSERT INTO `costumes` (`id_product`, `number`, `name_costume`, `size`, `price`, `quantity`, `category_id`, `img`) VALUES (0, '$number', '$name', '$value', '$price', '1', 'strój', '$file_name')";
      if($conn->query($sql))
      {
          header('location: ../list.php');
      }
    }



?>