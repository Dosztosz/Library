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
    if($conn->connect_error) {
        die("connection_failed: " . $conn->connect_error);
    }
    $sql ="SELECT * FROM rentals costumes";
    $results = $conn->query($sql);

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
            <h1>Rented Books</h1>
            <table>
                <thead>
                    <th>Rent Id</th>
                    <th>Name and vorname</th>
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
                                <td>'.$row['id'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['costume_id'].'</td>
                                <td>'.$row['date_return'].'</td>
                                <td>'.$row['address'].'</td>
                                <td>'.$row['phone'].'</td>
                                <td><a href="functions/confirm.php?id='.$row['id'].'&status=done">Confirm</a></td>
                                <td><a href="functions/edit.php?id='.$row['id'].'">Edit</a></td>
                            </tr>
                            ';
                            }
                            elseif ($row['status'] == "overdue"){
                                echo ' <tr>
                                <td style="background-color: red;">'.$row['id'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['costume_id'].'</td>
                                <td>'.$row['date_return'].'</td>
                                <td>'.$row['address'].'</td>
                                <td>'.$row['phone'].'</td>
                                <td><a href="functions/confirm.php?id='.$row['id'].'&status=done">Confirm</a></td>
                                <td><a href="functions/edit.php?id='.$row['id'].'">Edit</a></td>
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