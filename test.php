<?php
// Include the database configuration file
include 'includes/config.php';
$conn = new mysqli($servername, $username, $password, $db_name);
// Get images from the database
$query = $conn->query("SELECT * FROM costumes");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
    $imageURL = 'img/'.$row["img"];

    echo '<img src="'.$imageURL.'" alt="" />';
}
}else{
   echo '<p>No image(s) found...</p>';
} 
?>