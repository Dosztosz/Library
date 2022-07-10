<?php
include ('dashboard/functions/session.php');
require_once ('dashboard/includes/config.php');
$site_title = "Products";
$sql = "SELECT * FROM costumes";
$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$results = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main/style.css">
    <title>Dosztosz List</title>
</head>

<body>
    <div>
        <?php include ('main/header.php') ?>
        <div class="list-container">
            <div class="menu">
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
                                    <p class="numer">'.$row['number'].'</p>
                                    <p>'.$row['name_costume'].'</p>
                                    <p>'.$row['size'].' / '.$row['price'].'</p>
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