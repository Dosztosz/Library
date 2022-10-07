<?php
include ('functions_main.php');
include ('database/config.php');
include ('database/connect.php');
session_start(); 
get_head();
$site_title = "Products";
$sql = "SELECT * FROM costumes";
$results = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<?php get_head(); ?>

<body>
    <div>
        <?php 
        get_admin_header();
        get_header(); 
        ?>
        <div class="container">
            <div class="product_list">
                <?php
                if($results->num_rows>0){
                    while($row = $results->fetch_assoc()) {
                    echo '<div class="product_box">
                    <img src="img/stroje/'.$row['img'].'">
                    <h2>'.$row['number'].'. '.$row['name_costume'].'</h2>
                    <p>Rozmiary: <br>'.$row['size'].'</p>
                    <p>'.$row['quantity'].'</p>
                    </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>