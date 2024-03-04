<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Regist</title>
    <link rel="stylesheet" href="../css/Regist.css">

</head>
<body>
<p id="address">31 St Thomas Street, London, SE1 9QU, United Kingdom | Tel: (44 20) 7234 8000</p>
<ul class="topnav">
    <li><a href="Home.php">HOME</a></li>
    <li><a href="Rooms.php">ROOMS</a></li>
	<li><a href="Health.php">HEALTH & LEISURE</a></li>
    <li><a href="Booking.php">BOOKING</a></li>
    <li><a href="Profile.php">PROFILE</a></li>
    <li><a href="Login.php">LOGIN</a></li>
</ul>

<?php
    if(isset($_POST["form-submit"])) {

        $firstname = $_POST["first"];
        $lastname = $_POST["last"];
        $username = $_POST["uname"];
        $password = $_POST["psw"];
        $password2 = $_POST["psw2"];
        $firstname_regex = '/^[A-z]{4,}$/';
        $lastname_regex = '/^[A-z]{4,}$/';
        $username_regex = '/^[a-zA-z0-9\-\_\.]{4,}$/';
        $password_regex = '/^[a-zA-z0-9\-\_\.]{4,}$/';
        $error_data = false;

        if (!$firstname) {
            echo "<div class=\"message error\">Fill the firstname!</div>";
            $error_data = true;
        } elseif (strlen($firstname) <= 2) {
            echo "<div class=\"message error\">At least 4 characters for firstname</div>";
            $error_data = true;
        } elseif (!preg_match($firstname_regex, $firstname)) {
            echo "<div class=\"message error\">You can write only letters for name</div>";
            $error_data = true;
        }

        if (!$lastname) {
            echo "<div class=\"message error\">Fill the lastname!</div>";
            $error_data = true;
        } elseif (strlen($lastname) <= 2) {
            echo "<div class=\"message error\">At least 4 characters for lastname</div>";
            $error_data = true;
        } elseif (!preg_match($lastname_regex, $lastname)) {
            echo "<div class=\"message error\">You can write only letters for name</div>";
            $error_data = true;
        }

        if($password){
            if($password != $password2){
                echo "<div class=\"message error\">Passwords are not matching</div>";
                $error_data = true;
            } elseif(strlen($password) <= 3){
                echo "<div class=\"message error\">At least 4 characters for password</div>";
                $error_data = true;
            }
        } else {
            echo "<div class=\"message error\">You didn't fill the passwords</div>";
            $error_data = true;
        }

		if($error_data==false) {
			mkdir("../Profiles/".$username, 0777, true);
			$f=fopen("../Profiles/$username/data.txt", "w");
			fputs($f, "\r\n");
			fputs($f, $firstname."\r\n");
			fputs($f, $lastname."\r\n");
            fputs($f, $username."\r\n");
			fputs($f, $password."\r\n");
            fclose($f);
			header("Location: Login.php");
        }
    }





?>

<div class="container">
    <form method="POST" enctype="multipart/form-data">
        <label><b>First name</b></label>
        <input type="text" placeholder="Enter First name" name="first" required>

        <label><b>Last name</b></label>
        <input type="text" placeholder="Enter Last name" name="last" required>

        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label><b>Password2</b></label>
        <input type="password" placeholder="Enter Password Again" name="psw2" required>

       
		<button type="submit" name="form-submit" class="regist">Registration</button>
    </form>
</div>


<div class="container">
<form method="get" onclick="window.location.href='Login.php'">
    <button type="button" class="cancelbtn">Cancel</button>
	</form>
</div>

<div class="footer">
    <img id="logo" src="../img/logoo.jpg" alt="">
    <img id="sign" src="../img/shanlogo.jpg" alt="">
    <img id="luxury" src="../img/luxury.jpg" alt="">
</div>


</body>
</html>
