<!DOCTYPE html>
<html lang="en">

<?php 
include ('database/config.php');
include ('functions_main.php');
session_start();
get_head();

 ?>
<body>
    <div>
        <?php
        get_admin_header();
        get_header(); 
        ?>
        <div>
            <div class="header">
                <img src="img/banner.jpg" class="bg" alt="">
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
    <?php get_footer()?>
</body>
</html>