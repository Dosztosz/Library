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
                <form method="POST" action="functions/rent.php">
                    <div class="short-container">
                        <label for="cars">Wybierz Strój:</label>
                        <select id="cars" name="cars">
                        <?php
                        if($results->num_rows>0){
                            while($row = $results->fetch_assoc()) {
                                echo '<option value="'.$row['id'].'">'.$row['name']." - ".$row['size'].'</option>';
                            }
                        }
                        ?>
                        </select>
                    </div>
                    <label>Imie i Nazwisko</label>
                    <input class="full-form" name="name" type="text">
                    <label>Numer Telefonu</label>
                    <input class="full-form" name="phone" type="text">
                    <label>Adres zamieszkania</label>
                    <input class="full-form" name="address" type="text">
                    <label>Data Wypożyczenia</label>
                    <input type="date" name="dateorder" id="">
                    <label>Data Zdania</label>
                    <input type="date" name="datereturn" id="">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>