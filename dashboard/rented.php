<?php
    $site_title="Rented Books";
    include ('../database/session_admin.php');
    require_once ('../database/config.php');
    require_once ('../database/connect.php');
    $sql ="SELECT rentals.id_rent, rentals.name, rentals.date_return, rentals.price, rentals.phone, rentals.address, costumes.id_product, costumes.name_costume, costumes.size, rentals.status  
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
                    <th>Costumes Name</th>
                    <th>Costume Size</th>
                    <th>Costume rented</th>
                    <th>Date of return</th>
                    <th>Address</td>
                    <th>Phone</td>
                    <th>Confirm return</th>
                    <th>Edit</th>
                </thead>
                <?php
                    if($results->num_rows>0) {
                        while($row = $results->fetch_assoc()) {
                            if ($row['status'] == "rented"){
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
                            elseif ($row['status'] == "overdue"){
                                echo ' <tr>
                                <td style="background-color: red;">'.$row['id_rent'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['name_costume'].'</td>
                                <td>'.$row['size'].'</td>
                                <td>'.$row['date_return'].'</td>
                                <td>'.$row['address'].'</td>
                                <td>'.$row['phone'].'</td>
                                <td><a href="functions/confirm.php?id='.$row['id_rent'].'&status=done&product='.$row['id_product'].'">Confirm</a></td>
                                <td><a href="functions/edit.php?id='.$row['id_rent'].'&product='.$row['id_product'].'">Edit</a></td>
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