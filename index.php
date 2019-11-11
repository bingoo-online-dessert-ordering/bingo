<?php
session_start();
?>

 <?php

  $localhost = "localhost";
  $username = "root";
  $password = "";
  $db = "bingo";
  

  $conn = mysqli_connect($localhost,$username,$password,$db);
  if(!$conn)
  echo "Connection error : " .mysqli_connect_error();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bingoooo</title>
	<link rel="stylesheet" href="./css/navigation.css">
	<link rel="stylesheet" href="./css/common.css">
</head>


<body>
	<div class="header">
  		<h2>BINGOOO </h2>
	</div>

<div id="navbar">
	<ul>
 	 <li id="login"><a href="index.php">Login</a></li>
	</ul></div><br>

<br>

<!---------------------------------------------------------------------------------------------------------------------->
<div class="main_body" id="form">
<form name="loginform" method="post">
	Username: <br><br>
	<input type="text" name="uid"><br><br>
	Password:<br><br>
	<input type="Password" name="password"><br><br>
	<input type="submit" name="submit"><br><br>
</form>

</div>

</body>
</html>