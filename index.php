<?php
include ('includes/config.php');
session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: home.php');
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Logowania</title>
</head>
<body>
<div class="login-box">
    <div class="rent-box">
        <h3>Rent a costume</h3>
        <form method="POST" action="login.php">
        <label>Login</label>
        <input class="full-form" type="text" name="login">
        <label>Hasło</label>
        <input class="full-form" type="text" name="password" type="password">
        <button type="submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>