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

    $sql = "SELECT * FROM sizes";
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
                <form method="POST" action="add_cost.php">
                    <label>Nazwa Stroju</label>
                    <input class="full-form" name="name" type="text">
                    <label>Numer</label>
                    <input class="full-form" name="number" type="text">
                    <label>Rozmiary:</label><br>
                    <?php
                        if($results->num_rows>0){
                            while ($row = $results->fetch_assoc()){
                                echo '<input type="checkbox" id="'.$row['id'].'" name="'.$row['id'].'">
                                <label for="size-104">'.$row['size'].'</label><br>';
                            }
                        }
                    ?>
                    <label>Cena</label>
                    <input class="full-form" name="price" type="text">
                    <button type="submit">submit</button>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>