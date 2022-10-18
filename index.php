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
                <div class="column">
                    <h2><span style="color: #f0503e;">Wypożyczalnia</span><span style="color: #ffcf06"> Strojów</span></h2>
                    <button>sprawdź</button>
                </div>
                <div class="column banner">
                    <img src="img/kids.jpg" alt="">
                </div>
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