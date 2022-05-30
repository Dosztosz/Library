<?php
include ('functions/session.php');
$site_title = "Rent a costume";
    require_once ('includes/config.php');

    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $sql = "SELECT * FROM costumes WHERE `quantity` > 0";
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
                <form method="POST" action="functions/rent.php">
                    <div class="short-container">
                        <label for="costume_id">Wybierz Strój:</label>
                        <select id="costume_id" name="costume_id">
                        <?php
                        if($results->num_rows>0){
                            while($row = $results->fetch_assoc()) {
                                echo '<option value="'.$row['id_product'].'">'.$row['name_costume']." - ".$row['size'].'</option>';
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
                    <label>Cena</label>
                    <input class="full-form" name="price" type="text">
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