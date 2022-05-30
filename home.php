<?php
    include ('functions/session.php');
    require_once ('includes/config.php');
    $site_title = "Dashboard";
    $conn = new mysqli($servername, $username, $password, $db_name);
    $conn->set_charset("utf8");
    if($conn->connect_error){
        die("connection_failed: " . $conn->connect_error);
    }
    include ('functions/check_overdue.php');
    $sql = "SELECT * FROM rentals";
    $sql_next = "SELECT * FROM rentals WHERE `status` = 'overdue'";
    $results = $conn->query($sql);

    if ($result = mysqli_query($conn, $sql)) {
        // Return the number of rows in result set
        $rowcount = mysqli_num_rows($result);
    }
    if ($result = mysqli_query($conn, $sql_next)) {
        $rowoverdue = mysqli_num_rows($result);
    }
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
        <div class="widgets">
            <div class="widgets-block">
                <h2>Total orders</h2>
                <p><?php echo $rowcount; ?> Rents</p></div>
            <div class="widgets-block">
                <h2>Overdue orders</h2>
                <p><?php echo $rowoverdue; ?> Rents</p></div>
        </div>
    </div>
</body>

</html>