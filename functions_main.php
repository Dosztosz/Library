<?php

/* Head for the website */
function get_head(){
echo '
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main/style.css?version=32">
    <title>Main Page</title>
    </head>';


}
/* If the admin is logged in */
function get_admin_header(){
    if(isset($_SESSION['admin']))
    {
        if($_SESSION['admin'] == true)
        {
            echo '<div class="navbar-admin">
            <ul>
                <li><img src=""></li>
                <li>Welcome '.$_SESSION['admin'].'</li>
                <li><a href="">enter hub</a></li>
                <a href="dashboard/logout.php" class="bar-item"><span class="mobile">Logout</a>
            </ul>
        </div>';
        }
        else{};
    }
}
/* display a header navbar */
function get_header(){
echo'
<header>
    <div class="logo"><a href="index.php"><img src="img/logo.png"></a></div>
    <nav>
        <ul>
            <li><a href="lista.php">Dla mężczyzn</a></li>
            <li><a href="lista.php">Dla Kobiet</a></li>
            <li><a href="lista.php">Dla Dziewczynek</a></li>
            <li><a href="lista.php">Dla Chłopców</a></li>
            <li><a href="lista.php">Wypożycz Online</a></li>
        </ul>
    </nav>
</header>';
}

/* display a footer navbar */
function get_footer(){
    echo'
    <div class="footer">
    <div class="container_flex">
    <div class="row">
        <h3>Przydatne Linki</h3>
        <ul>
        <li><a href="">Strona Główna</a></li>
        <li><a href="">Stroje Karnawałowe</a></li>
        <li><a href="">Stroje Na Jasełka</a></li>
        <li><a href="">Wypożycz Online</a></li>
        <li><a href="">Dojazd</a></li>
        </ul>
        </div>
        <div class="row">
            <h3>Kontakt</h3>
            <ul>
                <li>Józefa Romana 25</li>
                <li>32-700 Bochnia</li>
                <li>tel. +48 602 487 679</li>
            </ul>
        </div>
    </div>
        <div class="credits">Wykonał Tomasz Dębosz dosztosz@int.pl</div>
    </div>';
}
?>