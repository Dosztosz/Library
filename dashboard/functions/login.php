<?php
require_once ('includes/config.php');
session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
	{
		header('Location: index.php');
		exit();
	}

// create connection

$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
    echo "Connected successfully";
    $login = $_POST['login'];
    $pass = $_POST['password'];
    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$pass = htmlentities($pass, ENT_QUOTES, "UTF-8");

    if($result = $conn->query(sprintf("SELECT * FROM users WHERE user='%s' AND pass='%s'",
    mysqli_real_escape_string($conn,$login), mysqli_real_escape_string($conn,$pass))))
    {
      $ilu_userow = $result->num_rows;
      if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
        $logged_in_user = mysqli_fetch_assoc($results);
        if ($logged_in_user['power'] == 3) {

          $_SESSION['user'] = $logged_in_user;
          $_SESSION['success']  = "You are now logged in";
          header('location: dashboard/home.php');		  
        }
        else{
          $_SESSION['user'] = $logged_in_user;
          $_SESSION['success']  = "You are now logged in";
  
          header('location: index.php');
        }
				$wiersz = $result->fetch_assoc();
				unset($_SESSION['blad']);
				$result->free_result();
				header('Location: home.php');
			} 
      else 
      {
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
			}
    }
  }

?>