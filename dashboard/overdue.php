<?php
    require_once ('../database/config.php');
    require_once ('../database/connect.php');
	$site_title = "Overdue Orders";
    /*  Composing The SQL for picking data from different tables */
    $sql ="SELECT rentals.id_rent, rentals.name, rentals.date_return, costumes.product_id, rentals.price, rentals.phone, rentals.address, costumes.name_costume, costumes.size, rentals.status  
    FROM rentals 
    INNER JOIN costumes 
    ON rentals.costume_id = costumes.product_id";
    $results = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('templates/head.php') ?>
</head>

<body>
<?php include('templates/header.php') ?>
    <div class="content">
        <?php include('templates/navbar-top.php') ?>
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
                /*Creating a list of overdue orders*/
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
                                <td><a href="functions/confirm.php?id='.$row['id_rent'].'&status=done&product='.$row['product_id'].'">Confirm</a></td>
                                <td><a href="functions/edit.php?id='.$row['id_rent'].'">Edit</a></td>
                            </tr>';
                            }
                        }
                    }
                ?>

            </table>
        </div>
    </div>
</body>

</html>