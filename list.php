<?php
    include ('functions/session.php');
    require_once ('includes/config.php');
    $site_title = "Products";

    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sql = "SELECT * FROM costumes";
    $results = $conn->query($sql);
    $sqle = "SELECT * FROM category"
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
                <a href="add_costume.php">Dodaj Strój</a>
            </div>
            <table>
                <thead>
                    <td>Number</td>
                    <td>Name</td>
                    <td>Size</td>
                    <td>Price</td>
                    <td>Quantity</td>
                </thead>
                <?php
                if($results->num_rows>0){
                    while($row = $results->fetch_assoc()) {
                        echo '<tr>
                        <td>'.$row['number'].'</td>
                        <td>'.$row['name_costume'].'</td>
                        <td>'.$row['size'].'</td>
                        <td>'.$row['price'].'</td>
                        <td>'.$row['quantity'].'</td>
                    </tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>

    </div>
</body>

</html>