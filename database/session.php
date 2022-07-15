<?php
session_start();
if (!isset($_SESSION['zalogowany']))
	{
		header('Location: ../login.php');
		exit();
	}
if ($_SESSION['admin'] == false)
{
	header('Location: ../index.php');
	exit();
}
?>