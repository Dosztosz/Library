<?php
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
?>
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
</header>
