<?php
    session_start();

	// When the submit button is press do this
if(!isset($_SESSION['loggedin'])){
    header("Location:Login.php");
}
	
    if(file_exists("../Profiles/Bookings/" . $_SESSION['username'] . ".txt")) {
        $file = file("../Profiles/Bookings/" . $_SESSION['username'] . ".txt");
        $firstname = $file[1];
        $lastname = $file[2];
        $phone = $file[3];
        $email = $file[4];
        $rooms = $file[5];
        $guests = $file[6];
        $arriving = $file[7];
        $leaving = $file[8];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/Profile.css">

</head>
<body>
<p id="address">31 St Thomas Street, London, SE1 9QU, United Kingdom | Tel: (44 20) 7234 8000</p>
<ul class="topnav">
    <li><a href="Home.php">HOME</a></li>
    <li><a href="Rooms.php">ROOMS</a></li>
	<li><a href="Health.php">HEALTH & LEISURE</a></li>
    <li><a href="Booking.php">BOOKING</a></li>
    <li><a class="active" href="Profile.php">PROFILE</a></li>
    <li><a href="Login.php">LOGIN</a></li>
    <li><a href="Logout.php">LOGOUT</a></li>
</ul>

<div id="col1">
        <p>Firstname</p>
        <p>Lastname</p>
        <p>Phone</p>
        <p>Email</p>
        <p>Rooms</p>
        <p>Guests</p>
        <p>Arriving</p>
        <p>Leaving</p>
</div>
<div id="col2">
        <p><?php if(isset($firstname)){ echo $firstname;}else{ echo "-";} ?></p>
        <p><?php if(isset($lastname)){ echo $lastname;}else{ echo "-";} ?></p>
        <p><?php if(isset($phone)){ echo $phone;}else{ echo "-";} ?></p>
        <p><?php if(isset($email)){ echo $email;}else{ echo "-";} ?></p>
        <p"><?php if(isset($rooms)){ echo $rooms;}else{ echo "-";} ?></p>
        <p><?php if(isset($guests)){ echo $guests;}else{ echo "-";} ?></p>
        <p><?php if(isset($arriving)){ echo $arriving;}else{ echo "-";} ?></p>
        <p><?php if(isset($leaving)){ echo $leaving;}else{ echo "-";} ?></p>
</div>

<?php
    include_once('Footer.php');
?>


</body>
</html>