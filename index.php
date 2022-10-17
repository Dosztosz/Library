<?php 
session_start();
include ('database/config.php');

 ?>
<!DOCTYPE html>
<html lang="pl">
 <?php require_once('resources/templates/head.php') ?>
<body>
    <div>
        <?php require_once('resources/templates/header.php') ?>
        <div>
            <div class="hero">
                <img src="img/banner.jpg" alt="">
            </div>
            <div class="image-row" alt="wyświetla liste">
                <a href="lista.php">
                    <div class="box men">
                        <h2>Mężczyźni</h2>
                    </div>
                </a>
                <a href="lista.php">
                    <div class="box woman">
                        <h2>Kobiety</h2>
                    </div>
                </a>
                <a href="lista.php">
                    <div class="box boy">
                        <h2>Chłopcy</h2>
                    </div>
                </a>
                <a href="lista.php">
                    <div class="box girl">
                        <h2>Dziewczynki</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php require_once('resources/templates/footer.php') ?>
</body>
</html>