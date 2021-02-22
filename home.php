<?php 
session_start();

if (empty($_SESSION['username'])) {
      header("Location: login.php");
      $Username =  $_SESSION['username'];
      session_start();
            include 'authenticate.php';
            $isUserLoggedIn = isset($_SESSION['username']  ) ? true : false;
            $Username =  $_SESSION['username'];
     exit();
}
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>

    <a href="logout process.php"><div style="float:right"><button>logout</button></div></a>

    <h1>Welcome to home page...!</h1>
    <p>  Hi <?=$username?> </p>
</body>
</html>                               
                           