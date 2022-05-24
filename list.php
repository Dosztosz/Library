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
    $sqle = "SELECT * FROM category"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library managment system</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/8d0eb52cc9.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include('includes/header.php') ?>
    <div class="content">
        <?php include('includes/navbar-top.php') ?>
        <div class="list">
            <div class="menu">
                <h1>
                    Spis Strojów
                </h1>
                <a href="add_costume.php">Dodaj Strój</a>
            </div>
            <table>
                <thead>
                    <td>Number</td>
                    <td>Name</td>
                    <td>Size</td>
                    <td>Price</td>
                    <td>Quantity</td>
                </thead>
                <?php
                if($results->num_rows>0){
                    while($row = $results->fetch_assoc()) {
                        echo '<tr>
                        <td>'.$row['number'].'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['size'].'</td>
                        <td>'.$row['price'].'</td>
                        <td>'.$row['quantity'].'</td>
                    </tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>

    </div>
</body>

</html>