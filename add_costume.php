<?php
    include ('/functions/session.php')
    require_once ('includes/config.php');
    $site_title = "Adding costume";
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
    <?php include ('includes/head.php') ?>
</head>

<body>
<?php include('includes/header.php') ?>
    <div class="content">
        <?php include('includes/navbar-top.php') ?>
        <div class="login-box">
            <div class="rent-box">
                <h3><?php echo $site_title; ?></h3>
                <form method="POST" action="add_cost.php">
                    <label>Nazwa Stroju</label>
                    <input class="full-form" name="name" type="text">
                    <label>Numer</label>
                    <input class="full-form" name="number" type="text">
                    <label>Rozmiary:</label><br>
                    <?php
                        if($results->num_rows>0){
                            while ($row = $results->fetch_assoc()){
                                echo '<input type="checkbox" id="'.$row['id_sizes'].'" name="'.$row['id_sizes'].'">
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