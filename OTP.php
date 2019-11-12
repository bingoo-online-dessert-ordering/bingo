<?php
session_start();
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
<form name="otpform" method="post">
	OTP: <br><br>
	<input type="text" name="otp"><br><br>
	<input type="submit" name="submit"><br><br>
</form>

</div>

<?php
					    if (isset($_POST['submit'])) {
					    	$otp = $_POST['otp'];
					    	
					    	if ($otp == $_SESSION['OTP']) {
					            $_SESSION['start'] = time(); // Taking now logged in time.
					            // Ending a session in 30 minutes from the starting time.
					            $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
					            header('Location: http://localhost:8000/bingo/home.php');

					    	} else { ?>

					    	    <p class="error">Incorrect OTP</p>

					    	<?php
					    	}
					            
					    }
					?>


</body>
</html>