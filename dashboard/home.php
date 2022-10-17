<?php
    require_once ('../database/config.php');
    require_once ('../database/connect.php');
    require_once ('functions/check_overdue.php');
    $site_title = "Dashboard";
    $sql ="SELECT rentals.id_rent, rentals.name, rentals.date_return, rentals.date_rent, rentals.size, costumes.product_id, costumes.name_costume, rentals.status, costumes.number  
    FROM rentals 
    INNER JOIN costumes 
    ON rentals.costume_id = costumes.product_id";
    $results = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('templates/head.php') ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<body>
    <?php include('templates/header.php') ?>
    <div class="content">
        <?php include('templates/navbar-top.php') ?>
        <div class="title">
            <h2 class="rental-box-h2">Rental Products</h2>
            <p>System zarządzania wypożyczalnią strojów</p>
        </div>
        <div class="widgets">
            <a href="rent.php">
                <div class="widgets-block shadow-main">
                    <h2>Rent a product</h2>
                </div>
            </a>
            <a href="overdue.php">
            <div class="widgets-block shadow-main">
                <h2>Overdue Rentals</h2>
                <p> Rentals</p>
            </div>
            </a>
            <a href="list.php">
            <div class="widgets-block shadow-main">
                <h2>All available costumes</h2>
                <p> Costumes</p>
            </div>
            </a>
        </div>
        <div class="dash-row">
            <div class="dash-column shadow-main">
                <h2>Opóźnione zamówienia</h2>
                <table>
                    <thead>
                        <th>Strój</th>
                        <th>Imię i Nazwisko</th>
                        <th>Data oddania</th>
                        <th>Przejdź do Zamówienia</th>
                    </thead>
                <?php
                    if($results->num_rows>0){
                        while($row = $results->fetch_assoc()){
                            if($row['status'] == 'overdue'){
                                $break = " ";
                                echo'
                                <tr>
                                    <td>'.$row['number'].$break.$row['size'].$break.$row['name_costume'].'</td>
                                    <td>'.$row['name'].'</td>
                                    <td>'.$row['date_return'].'</td>
                                    <td><button class="button">Confirm</button></td>
                                </tr>';
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