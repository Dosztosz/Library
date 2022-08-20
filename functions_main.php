<?php

/* Head for the website */
function get_head(){
echo '<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main/style.css?version=1">
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
            <a href="logout.php" class="bar-item"><span class="mobile">Logout</a>
        </ul>
    </div>';
    }
}
}
/* display a header navbar */
function get_header(){
echo'
<header>
    <div class="info-bar">Bochnia 32-700 ul. Józefa Romana 25</div>
    <div class="logo"><a href="index.php"><img src="log.png"></a><p>+48 506 409 529</p>
    <a href="login.php"><p>Zaloguj się</a> - <a href="register.php">Zarejestruj się</a></p></div>
    <nav>
        <ul>
            <li><a href="lista.php">Dla mężczyzn</a></li>
            <li><a href="lista.php">Dla Kobiet</a></li>
            <li><a href="lista.php">Dla Dziewczynek</a></li>
            <li><a href="lista.php">Dla Chłopców</a></li>
            <li><a href="lista.php">Cosplay</a></li>
        </ul>
    </nav>
</header>';
}

?>