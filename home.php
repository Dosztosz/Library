<?php
session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
    require_once ('includes/config.php');
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costume rental - admin page</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/8d0eb52cc9.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include('includes/header.php') ?>
    <div class="content">
        <?php include('includes/navbar-top.php') ?>
        <div class="widgets">
            <div class="widgets-block">
                <h2>Rented today</h2>
                <p><?php echo $rowcount; ?> Costumes</div>
            <div class="widgets-block">
                <h2>Overdue Rents</h2>
                <p><?php echo $rowoverdue; ?> Costumes</div>
            <div class="widgets-block">
                <h2>All available costumes</h2>
                <p>1320 Costumes</div>
        </div>
    </div>
</body>

</html>