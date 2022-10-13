<?php
include ('database/config.php');
include ('database/connect.php');
session_start(); 
$site_title = "Products";
if(isset($_POST['filter'])){
    switch($_POST['filter']){
        case 'halloween':
            $filter = "halloween";
            break;
    }
    $sql = "SELECT * FROM costumes WHERE `category` REGEXP `$filter` ";
}
$sql = "SELECT * FROM costumes ";

$results = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<?php require_once('resources/templates/head.php') ?>

<body>
    <div>
        <?php require_once('resources/templates/header.php') ?>
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
    <?php require_once('resources/templates/footer.php') ?>
</body>

</html>