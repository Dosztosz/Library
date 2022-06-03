<?php
    include ('functions/session.php');
	$site_title = "Overdue Orders";
    require_once ('includes/config.php');

    $conn = new mysqli($servername, $username, $password, $db_name);
    $conn->set_charset("utf8");
    if($conn->connect_error) {
        die("connection_failed: " . $conn->connect_error);
    }
    $sql ="SELECT rentals.id_rent, rentals.name, rentals.date_return, costumes.id_product, rentals.price, rentals.phone, rentals.address, costumes.name_costume, costumes.size, rentals.status  
    FROM rentals 
    INNER JOIN costumes 
    ON rentals.costume_id = costumes.id_product";
    $results = $conn->query($sql);

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
            <h1><?php echo $site_title; ?></h1>
            <table>
                <thead>
                    <th>Rent Id</th>
                    <th>Name and vorname</th>
                    <th>Number</th>
                    <th>Size</th>
                    <th>Date of return</th>
                    <th>Address</td>
                    <th>Phone</td>
                    <th>Confirm return</th>
                    <th>Edit</th>
                </thead>
                <?php
                    if($results->num_rows>0) {
                        while($row = $results->fetch_assoc()) {
                            if ($row['status'] == "overdue"){
                                echo ' <tr>
                                <td>'.$row['id_rent'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['name_costume'].'</td>
                                <td>'.$row['size'].'</td>
                                <td>'.$row['date_return'].'</td>
                                <td>'.$row['address'].'</td>
                                <td>'.$row['phone'].'</td>
                                <td><a href="functions/confirm.php?id='.$row['id_rent'].'&status=done&product='.$row['id_product'].'">Confirm</a></td>
                                <td><a href="functions/edit.php?id='.$row['id_rent'].'">Edit</a></td>
                            </tr>
                            ';
                            }
                        }
                    }
                ?>

            </table>
        </div>
    </div>

    </div>
</body>

</html>