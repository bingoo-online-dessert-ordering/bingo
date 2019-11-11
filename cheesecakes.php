<!DOCTYPE html>
<html>
<head>
<title>Bingooo Cheesecakes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/navigation.css">
<link rel="stylesheet" href="./css/list.css">
<script type="text/javascript" src="./js/compare_cheese.js"></script>
<script>

  function opa(x)
  {
    var element = document.getElementById(x);
    element.style.opacity = "0.5";
  }
  function opa2(x)
  {
    var element = document.getElementById(x);
    element.style.opacity = "1";
  }
  
  </script>
  <style type="text/css">
  	table,th,td {
	border : 1px solid black;
	border-collapse: collapse;
	text-align: center;
	font-size: 20px;
	}	
	th,td {
	padding: 5px;
	}
	table {
		margin-left: 20px;
		margin-bottom: 20px;

	}
  </style>
</head>
<body>

<div class="header">
  <h2>BINGOOO </h2>
</div>

<div id="navbar">
<ul>
  <li><a class="active" href="home.html">Home</a></li>
  <li><a href="cakes.php">Cakes</a></li>
  <li><a href="icecream.php">Ice Creams</a></li>
  <li><a href="cheesecakes.php"  style="background-color: white; color: grey">Cheesecakes</a></li>
  <li><a href="joinus.php">Join Us</a></li>

</ul>
</div>
<br>

<?php

  $localhost = "localhost";
  $username = "root";
  $password = "";
  $db = "bingoo";
  $i=1;
  

  $conn = mysqli_connect($localhost,$username,$password,$db);
  if(!$conn)
  echo "Connection error : " .mysqli_connect_error();

  $retrieving_data = "select * from eatery_details where e_type='cheesecake' order by e_rating DESC";
  $result = $conn->query($retrieving_data);
    while($row = $result->fetch_assoc()) { ?>
      <div id="list">
      <img id="img<?= $i ?>" src="./images/cheese<?= $i ?>.jpg" alt="cake" class="rep_img" >
      <font size="3" id="anchor2"><b><?= $row["e_name"]?></b></font><br>
      <?php
      for($j=0; $j < $row["e_rating"]; $j++) { ?>
        <img src="./images/star.jpg" alt="star" class="star" >
      <?php } ?>
      <br>
      <font size="2"><?= $row["e_address"]?></font><br>
      <font size="2" ><?= $row["e_cost"]?> for 2</font>


      </div>
      <br>
<?php 
$i++;
} 

$i=1;

?>

</body>
</html>