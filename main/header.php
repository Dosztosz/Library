<?php
if(isset($_SESSION['admin']))
{
    if($_SESSION['admin'] == true)
    {
        echo '<div class="navbar-top">
        <ul>
            <li><img src=""></li>
            <li>Welcome Tomasz Dębosz</li>
            <li>Edit</li>
            <a href="logout.php" class="bar-item"><span class="mobile">Logout</a>
        </ul>
    </div>';
    }
}
?>
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
</header>