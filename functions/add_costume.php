<?php
session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
    require_once ('includes/config.php');

    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sql = "SELECT * FROM costumes";
    $results = $conn->query($sql);
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
        <div class="login-box">
            <div class="rent-box">
                <h3>Rent a costume</h3>
                <form method="POST">
                    <div class="short-container">
                        <label>Nazwa Stroju</label>
                        <input class="short-form" type="text">
                        <label>Numer</label>
                        <input class="short-form" type="text">
                        <label>Rozmiar</label>
                        <input class="short-form" type="text">
                        <label>Cena</label>
                        <input class="short-form" type="text">
                    </div>
                    <label>Imie i Nazwisko</label>
                    <input class="full-form" type="text">
                    <label>Numer Telefonu</label>
                    <input class="full-form" type="text">
                    <label>Adres zamieszkania</label>
                    <input class="full-form" type="text">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>