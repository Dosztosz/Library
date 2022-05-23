<?php
session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
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
                <p>5 Costumes</div>
            <div class="widgets-block">
                <h2>Costumes to get back</h2>
                <p>5 Costumes</div>
            <div class="widgets-block">
                <h2>All available costumes</h2>
                <p>1320 Costumes</div>
            <div class="widgets-block">
                <h2>Rented Costumes</h2>
                <p>8 Rents</div>
        </div>
    </div>
</body>

</html>