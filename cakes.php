<?php
    session_start();

    if (!isset($_SESSION['email'])) {
        header('Location: http://localhost:8000/bingo/index.php');  
                    
    }
    else {
        $now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
            session_destroy();
        header('Location: http://localhost:8000/bingo/index.php');  
        }
        else { //Starting this else one [else1]
?>


<!DOCTYPE html>
<html>

<head>
  <title>Bingooo Cakes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/navigation.css">
  <link rel="stylesheet" href="./css/list.css">
  <script type="text/javascript" src="./js/compare_cake.js"></script>

</head>
<body>

  <div class="header">
    <h2>BINGOOO </h2>
  </div>

  <div id="navbar">
    <ul>
      <li><a class="active" href="home.php">Home</a></li>
      <li><a href="cakes.php" style="background-color: white; color: grey">Cakes</a></li>
      <li><a href="icecream.php">Ice Creams</a></li>
      <li><a href="cheesecakes.php">Cheesecakes</a></li>
      <?php

      if($_SESSION['type']==1){
        ?>
        <li><a href="eatery.php">My Eatery</a></li>
      <?php 
      }else{ ?>

      <li><a href="joinus.php">Join Us</a></li>
     <?php }

      ?>
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

  $retrieving_data = "select * from eatery where type='cakes' order by rating DESC";
  $result = $conn->query($retrieving_data);
    while($row = $result->fetch_assoc()) { ?>
      <div id="list">
      <img id="img<?= $i ?>" src="./images/cake<?= $i ?>.jpg" alt="cake" class="rep_img" >
      <font size="3" id="anchor2"><b><?= $row["name"]?></b></font><br>
      <?php
      for($j=0; $j < $row["rating"]; $j++) { ?>
        <img src="./images/star.jpg" alt="star" class="star" >
      <?php } ?>
      <br>
      <font size="2"><?= $row["address"]?></font><br>
      <font size="2" ><?= $row["cost"]?> for 2</font>


      </div>
      <br>
<?php 
$i++;
} 

$i=1;

?>

</body>
</html>
<?php 
}
} ?>