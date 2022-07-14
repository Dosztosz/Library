<!DOCTYPE html>
<html lang="en">

<?php session_start(); 
include ('main/head.php') ?>
<body>
    <div>
        <?php include ('main/header.php') ?>
        <div>
            <div class="header">
                <div class="menu">
                    <ul>
                        <li><a href="lista.php">Dla Dziewczynek</a></li>
                        <li><a href="lista.php">Dla Chłopców</a></li>
                        <li><a href="lista.php">Dla Mężczyzn</a></li>
                        <li><a href="lista.php">Dla Kobiet</a></li>
                        <li><a href="lista.php">Akcesoria</a></li>
                        <li><a href="lista.php">Cosplay</a></li>
                    </ul>
                </div>
                <div class="slider">
                    <img src="slider.png" alt="">
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
</body>
</html>