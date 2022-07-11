<?php
    include ('functions/session.php');
    require_once ('includes/config.php');
    $site_title = "Products";

    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sql = "SELECT * FROM costumes";
    $sqlimage = "SELECT * FROM costumes";
    $results = $conn->query($sql);
    $result = $conn->query($sqlimage);
    $sqle = "SELECT * FROM category";
    $kafelki = $_GET['kafelki'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('includes/head.php') ?>
</head>

<body>
<?php include('includes/header.php') ?>
    <div class="content">
        <?php include('includes/navbar-top.php') ?>
        <div class="list">
            <div class="menu">
                <h1><?php echo $site_title; ?></h1>
                <a href="?kafelki=0"><i class="fa-solid fa-list lista"></i></a>
                <a href="?kafelki=1"><i class="fa-solid fa-image lista"></i></a>

                <a href="add_costume.php">Dodaj Strój</a>
            </div>
            <?php
            if($results->num_rows>0){
                if($kafelki == 1){
                    echo '<div class="kafelki">';
                    while($row = $results->fetch_assoc()) {
                            echo '<div class="kafelek">
                            <img src="../img/'.$row['img'].'">
                            <p class="numer">'.$row['number'].'</p>
                            <p>'.$row['name_costume'].'</p>
                            <p>'.$row['size'].' / '.$row['price'].'</p>
                            <p>'.$row['quantity'].'</p>
                            <p><a href="product.php?productId='.$row['id'].'">Manage</a></p>
                            </div>';
                    }
                    echo '</div>';
                }
                else{
                    echo '<table id="lista">
                    <thead>
                    <td>Number</td>
                    <td>Name</td>
                    <td>Size</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    </thead>
                    ';
                    while($row = $results->fetch_assoc()) {
                        echo '<tr>
                        <td>'.$row['number'].'</td>
                        <td>'.$row['name_costume'].'</td>
                        <td>'.$row['size'].'</td>
                        <td>'.$row['price'].'</td>
                        <td>'.$row['quantity'].'</td>
                        </tr>';
                    }
                    echo '</table>';
                }
            }


            ?>
        </div>
    </div>

    </div>
</body>

</html>