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
            <div class="filter_list">
                <form action="" method="post">
                    <select name="" id="">
                        <option value="Jasełka">Jasełka</option>
                        <option value="Karnawał">Karnawał</option>
                        <option value="Halloween">Halloween</option>
                        <option value="Wielkanoc">Wielkanoc</option>
                        <option value="Lektura">Lektura / Literatura</option>
                    </select>
                    <select name="" id="">
                        <option value="104">104</option>
                        <option value="116">116</option>
                        <option value="128">128</option>
                        <option value="140">140</option>
                        <option value="158">158</option>
                        <option value="duzy">Duży</option>
                    </select>
                    <button type="submit">Zatwierdź</button>
                </form>
            </div>
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