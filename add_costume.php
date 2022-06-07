<?php
    include ('functions/session.php');
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
                <form method="POST" action="functions/add_cost.php">
                    <label>Nazwa Stroju</label>
                    <input class="full-form" name="name" type="text">
                    <label>Numer</label>
                    <input class="full-form" name="number" type="text">
                    <label>Rozmiary:</label><br>
                    <input type="checkbox" value="104" name="checkbox[]">
                    <label for="size-104">104</label><br>
                    <input type="checkbox" value="116" name="checkbox[]">
                    <label for="size-1116">116</label><br>
                    <input type="checkbox" value="128" name="checkbox[]">
                    <label for="size-128">128</label><br>
                    <input type="checkbox" value="140" name="checkbox[]">
                    <label for="size-1140">140</label><br>
                    <input type="checkbox" value="152" name="checkbox[]">
                    <label for="size-152">152</label><br>
                    <input type="checkbox" value="duzy" name="checkbox[]">
                    <label for="size-duzy">Duży</label><br>
                    <label>Cena</label>
                    <input class="full-form" name="price" type="text">
                    <input type="file" name="file">
                    <button type="submit">submit</button>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>