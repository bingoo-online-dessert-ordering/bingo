<?php
session_start();
?>

 <?php

  $localhost = "localhost";
  $username = "root";
  $password = "";
  $db = "bingoo";


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
	Email: <br><br>
	<input type="text" name="email_id"><br><br>
	Password:<br><br>
	<input type="Password" name="password"><br><br>
	<input type="submit" name="submit"><br><br>
</form>

</div>

<?php
					    if (isset($_POST['submit'])) {
					    	$email = $_POST['email_id'];
					    	$pass = $_POST['password'];

					    	$retrieving_data = "select * from user where email='".$email."' AND password='".$pass."'";
					    	$result = $conn->query($retrieving_data);

					    	if ($result->num_rows > 0 && $result->num_rows < 2) {
					    	    while($row = $result->fetch_assoc()) {
					    	    $_SESSION['email'] = $email;
					    	    $_SESSION['name'] = $row['name'];
					    	    $_SESSION['type'] = $row['user_type'];
					    	    $_SESSION['email_id'] = $row['email'];
					    	    $_SESSION['type'] = $row['user_type'];
					            $_SESSION['start'] = time(); // Taking now logged in time.
					            // Ending a session in 30 minutes from the starting time.
					            // $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
					            header('Location: http://localhost:8000/bingo/phpmailer/mailer.php');  
					    	    }

					    	} else { ?>

					    	    <p class="error">Please enter a valid username or password</p>

					    	<?php
					    	}
					            
					    }
					?>


</body>
</html>