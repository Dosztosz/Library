<?php
include ('functions/session.php');
    require_once ('includes/config.php');
    $site_title = "Size configurations";
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
    <title><?php echo $site_title; ?></title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/8d0eb52cc9.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include('includes/header.php') ?>
    <div class="content">
        <?php include('includes/navbar-top.php') ?>
        <div class="list">
            <div class="menu">
                <h1><?php echo $site_title; ?></h1>
                <a href="add_costume.php">Dodaj Strój</a>
            </div>
            <table>
                <thead>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Edit</td>
                </thead>
                <?php
                if($results->num_rows>0){
                    while($row = $results->fetch_assoc()) {
                        echo '<tr>
                        <td>'.$row['id_sizes'].'</td>
                        <td>'.$row['size'].'</td>
                        <td><a href="edit_size.php?id='.$row['id_sizes'].'">edit</a></td>
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