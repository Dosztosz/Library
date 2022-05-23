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
                <tr>
                    <td>Name and vorname</td>
                    <td>Id of book</td>
                    <td>Date of rent</td>
                    <td>Date of return</td>
                    <td>Confirm return</td>
                    <td>Edit</td>
                </tr>
                <tr>
                    <td>Tomasz Dębosz</td>
                    <td>#43</td>
                    <td>10.10.2022</td>
                    <td>15.10.2022</td>
                    <td><a>Confirm</a></td>
                    <td><a>Edit</a></td>
                </tr>
                <tr>
                    <td>Bronisław Koń</td>
                    <td>#23</td>
                    <td>12.09.2022</td>
                    <td>15.10.2022</td>
                    <td><a>Confirm</a></td>
                    <td><a>Edit</a></td>
                </tr>
                <tr>
                    <td>Konisław Broń</td>
                    <td>#53</td>
                    <td>13.10.2022</td>
                    <td>17.10.2022</td>
                    <td><a>Confirm</a></td>
                    <td><a>Edit</a></td>
                </tr>

            </table>
        </div>
    </div>

    </div>
</body>

</html>