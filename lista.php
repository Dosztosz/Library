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
        <div class="list-container">
            <div class="filters">
                <ul>
                    <li><a href="lista.php">Kategoria Stroju</a></li>
                    <li><a href="lista.php">Rozmiar</a></li>
                    <li><a href="lista.php">Dla Mężczyzn</a></li>
                </ul>
            </div>
        </div>
            <div class="product_list">
                <?php
                if($results->num_rows>0){
                    while($row = $results->fetch_assoc()) {
                    echo '<div class="product_box">
                    <img src="img/'.$row['img'].'">
                    <p>'.$row['number'].'. '.$row['name_costume'].'</p>
                    <p>Rozmiary: '.$row['size'].'</p>
                    <p>'.$row['quantity'].'</p>
                    <button>Sprawdź</button>
                    </div>';
                    }
                }
                ?>
            </div>
    </div>
</body>

</html>