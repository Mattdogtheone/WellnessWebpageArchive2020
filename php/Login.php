<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/Login.css">

</head>
<body>
<p id="address">31 St Thomas Street, London, SE1 9QU, United Kingdom | Tel: (44 20) 7234 8000</p>
<ul class="topnav">
    <li><a href="Home.php">HOME</a></li>
    <li><a href="Rooms.php">ROOMS</a></li>
	<li><a href="Health.php">HEALTH & LEISURE</a></li>
    <li><a href="Booking.php">BOOKING</a></li>
    <li><a href="Profile.php">PROFILE</a></li>
    <li><a class="active" href="Login.php">LOGIN</a></li>
    <li><a href="Logout.php">LOGOUT</a></li>
</ul>

<div class="imgcontainer">
    <img class="avatar" src="../img/luxury.jpg" alt="Avatar" >
</div>

<?php
if(isset($_POST["login-button"])){

  $username = $_POST["uname"];
  $pass = $_POST["psw"];

  $error = false;
  $tmp_username="";
  $tmp_pass="";

  //HA VAN ILYEN FELHASZNALO
  $files = scandir("../Profiles/");
  foreach($files as $file) {
	if($file != $username){
	  $error = true;
	}else{
	  $error = false;
	  $lines = file("../Profiles/$username/data.txt");
	  $tmp_username = trim($lines[3]);
	  $tmp_pass = trim($lines[4]);
	  break;
	}
  }

  if(($tmp_username == $username) && ($tmp_pass == $pass) && $error == false){
	$_SESSION['loggedin'] = true;
  } else {
	echo "<div class=\"message error\">Wrong username or password</div>";
  }

}

if(isset($_SESSION['loggedin'])){
  $_SESSION['username'] = $username;
  header("Location:Welcome.php");
}

?>

<div class="container">
    <form method="POST">
		<label><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="uname" required>

	    <label><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="psw" required>

	    <button type="submit" name="login-button">Login</button>
    </form>
</div>

<div class="container">
    <form method="get" onclick="window.location.href='Regist.php'">
        <button type="button" class="regist">Registration</button>
    </form>
</div>

<div class="container">
<form method="get" onclick="window.location.href='Home.php'">
    <button type="button" class="cancelbtn">Cancel</button>
	</form>
</div>

<?php
    include_once('Footer.php');
?>

</body>
</html>
