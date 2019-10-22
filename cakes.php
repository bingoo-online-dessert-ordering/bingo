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
      <li><a class="active" href="index.html">Home</a></li>
      <li><a href="cakes.html" style="background-color: white; color: grey">Cakes</a></li>
      <li><a href="icecream.html">Ice Creams</a></li>
      <li><a href="cheesecakes.html">Cheesecakes</a></li>
      <li><a href="joinus.html">Join Us</a></li>
    </ul>
  </div>


  <?php

  $localhost = "localhost";
  $username = "root";
  $password = "";
  $db = "bingoo";
  

  $conn = mysqli_connect($localhost,$username,$password,$db);
  if(!$conn)
  echo "Connection error : " .mysqli_connect_error();

  $retrieving_data = "select * from e_details";
  $result = $conn->query($retrieving_data);
    while($row = $result->fetch_assoc()) 

      echo $row["e_name"];



  ?>

</body>
</html>