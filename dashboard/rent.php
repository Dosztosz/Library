<?php

require_once ('../database/config.php');
require_once ('../database/connect.php');
$site_title = "Rent a costume";
$sql = "SELECT * FROM costumes WHERE `quantity` > 0";
$results = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ('templates/head.php') ?>
</head>

<body>
<?php include('templates/header.php') ?>
    <div class="content">
        <?php include('templates/navbar-top.php') ?>
        <div class="login-box">
            <div class="rent-box">
                <h3><?php echo $site_title; ?></h3>
                <form method="POST" action="functions/rent.php">
                    <label for="costume_id">Wybierz Strój:</label>
                        <select class="full-form" id="costume_id" name="costume_id">
                            <?php
                            if($results->num_rows>0){
                                while($row = $results->fetch_assoc()) {
                                    echo '<option value="'.$row['number'].'">'.$row['number'].". ".$row['name_costume'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    <label  for="costume_id">Wybierz Rozmiar:</label>
                        <select class="full-form"  id="size" name="size">
                            <option value="104">104</option>
                            <option value="116">116</option>
                            <option value="128">128</option>
                            <option value="140">140</option>
                            <option value="152">152</option>
                            <option value="Duzy">Duzy</option>
                        </select>
                    <label>Imie i Nazwisko</label>
                    <input class="full-form" name="name" type="text">
                    <label>Numer Telefonu</label>
                    <input class="full-form" name="phone" type="text">
                    <label>Adres zamieszkania</label>
                    <input class="full-form" name="address" type="text">

                    <label>Cena:</label>
                    <input class="full-form" name="price" type="text">
                    <label>Data Wypożyczenia</label>
                    <input class="full-form" type="date" name="dateorder" id="">
                    <label>Data Zdania</label>
                    <input class="full-form" type="date" name="datereturn" id="">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    </div>
</body>

</html>