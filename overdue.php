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
            <h1>Lista Zaległych Wypożyczeń</h1>
            <table>
                <tr>
                    <td>Name</td>
                    <td>EAN</td>
                    <td>Number of books</td>
                    <td>Number of rents</td>
                    <td>Rent</td>
                    <td>Edit</td>
                </tr>
                <tr>
                    <td>Jubilatka</td>
                    <td>4728345912312</td>
                    <td>10</td>
                    <td>3</td>
                    <td><a>Rent</a></td>
                    <td><a>Edit</a></td>
                </tr>
                <tr>
                    <td>Zielona Mila</td>
                    <td>1238438593023</td>
                    <td>6</td>
                    <td>2</td>
                    <td><a>Rent</a></td>
                    <td><a>Edit</a></td>
                </tr>
                <tr>
                    <td>Kupicalka</td>
                    <td>3578474742546</td>
                    <td>14</td>
                    <td>3</td>
                    <td><a>Rent</a></td>
                    <td><a>Edit</a></td>
                </tr>

            </table>
        </div>
    </div>

    </div>
</body>

</html>