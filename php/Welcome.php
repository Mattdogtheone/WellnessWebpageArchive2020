<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/Welcome.css">

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

<h1>
    Welcome to our website!
</h1>

<div class="container">
<form method="get" onclick="window.location.href='Home.php'">
    <button type="button" class="button">Homepage</button>
	</form>

</div>


<?php
    include_once('Footer.php');
?>

</body>
</html>
