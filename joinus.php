<html>
<head>
<title>Join Us!</title>
<link rel="stylesheet" href="./css/navigation.css">
<style type="text/css">
  #submit {
    margin-left: 30px;
    background-color: pink;
    display: block;
    padding: 20px;
    border: none;
    font-size: 20px;
    text-decoration: ;
  }
  #shift {
    margin-left: 20px;
  }
  legend {
    font-size: 35px;
  }
  fieldset {
    margin-right: 20px;
  }
</style>
</head>
<script>
function validateForm()
{
var x = document.forms["MyForm"]["eatery_name"].value;
  if (x == "") {
    alert("Name must be filled out");
	}
 x = document.forms["MyForm"]["add"].value;
if (x == "") {
    alert("Address must be filled out");
	}
 x = document.forms["MyForm"]["man_name"].value;
if (x == "") {
    alert("Manager Name must be filled out");
	}
	return false;
}

function heet()
{
var no=document.forms["MyForm"]["number"].value;
var phoneno = /^\d{10}$/;

if(no.match(phoneno))
     {return true;}
else
        {
        alert("Enter valid number ");
        return false;
        }
		return false;
}

function printName() {
  var x = document.forms["MyForm"]["eatery_name"].value;
  document.getElementById("d1").innerHTML = "You wrote: " + x;
}

</script>
<body>
<div class="header">
  <h2>BINGOOO </h2>
</div>

<div id="navbar">
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="cakes.php" >Cakes</a></li>
  <li><a href="icecream.php">Ice Creams</a></li>
  <li><a href="cheesecakes.php">Cheesecakes</a></li>
  <li><a href="joinus.php" style="background-color: white; color: grey">Join Us</a></li>
</ul><br><br>
</div><br>
<div style="margin-top: -613px; background-color: white;"><br><br>
  <div id="shift">

<form action="joinus.php" name="MyForm" onsubmit="return validateForm()+ heet()" method="get">
  <fieldset>
    <legend>Join Us</legend><br>
Eatery Name: <input type="text" name="eatery_name" oninput="printName()"><br><br>
Address: <input type="text" name="add"><br><br>
Eatery type: 
<select>
  <option value="cakes" name="type">Cakes</option>
  <option value="ice-cream" name="type">Ice Creams</option>
  <option value="cheesecake" name="type">Cheesecake</option>
  <option value="choco" name="type">Chocolates</option>
</select><br><br>
Manager Name: <input type="text" name="man_name"><br><br>
Contact Number: <input type="text" name="number" maxlength="10"><br><br>
Cost for 2: <input type="text" name="cost">
<br><br>
<input type="radio" name="type" value="eggless">Eggless
<input type="radio" name="type" value="with egg">With Egg<br><br>
<input type="submit" id='submit'>
</fieldset>
	</form>
  <p id="d1"></p>
</div>
</div>
	</body>
</html>