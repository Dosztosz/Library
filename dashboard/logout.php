<?php
session_start();
if (isset($_SESSION['zalogowany']))
{
    unset($_SESSION['zalogowany']);
}
header("location: ../index.php");
?>
