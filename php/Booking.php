<?php
$firstnameErr = $lastnameErr = $emailErr = $phoneErr = $timeErr = $arrivingErr = $leavingErr = false;
session_start();

// When the submit button is press do this
if(!isset($_SESSION['loggedin'])){
    header("Location:Login.php");
}

if (isset($_POST['submit'])) {
    $firstname = $_POST['first'];
    $lastname = $_POST['last'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $rooms = $_POST['rooms'];
    $guests = $_POST['guests'];
    $arriving = $_POST['arriving'];
    $leaving = $_POST['leaving'];
    $firstname_regex = '/^[A-z]{4,}$/';
    $lastname_regex = '/^[A-z]{4,}$/';
    $phone_regex = '/^[0-9]{4,}$/';
    $errordata = false;
    $time = date("Y-m-d");
   // $timeArr = explode(".", $time);

        if(!$firstname){
            echo "<div class=\"message error\">Fill the firstname!</div>";
            $errordata=true;
            $firstnameErr = true;
        }elseif(strlen($firstname) <= 4){  
            echo "<div class=\"message error\">At least 4 characters for firstname</div>";
            $firstnameErr = true;
            $errordata=true;
        }else{
            $firstname = test_input($_POST["first"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
                echo "<div class=\"message error\">Only letters</div>";
                $firstnameErr = true;
                $error_data = true;
              }
            
           
        }
        if(!$lastname){
            echo "<div class=\"message error\">Fill the firstname!</div>";
            $errordata=true;
            $lastnameErr = true;
        }elseif(strlen($lastname) <= 4){  
            echo "<div class=\"message error\">At least 4 characters for lastname</div>";
            $lastnameErr = true;
            $errordata=true;
        }else{
            $lastname = test_input($_POST["last"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
                echo "<div class=\"message error\">Only letters</div>";
                $lastname = true;
                $error_data = true;
              }
            
           
        }
      if(!$phone){
        echo "<div class=\"message error\">At least 8 characters for phone</div>";
        $error_data = true;
        $phoneErr = true;
      }elseif (strlen($phone) <= 8) {
        echo "<div class=\"message error\">Invalid phone number</div>";
            $error_data = true;
            $phoneErr = true;
        }
        if (empty($_POST["email"])) {
            echo "<div class=\"message error\">fill the e-mail</div>";
            $errordata=true;
            $emailErr = true;
          } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errordata=true;
                $emailErr = true;
                echo "<div class=\"message error\">Invalid e-mail address</div>";
            }
          } 
          if(!$arriving){
              echo "<div class=\"message error\">Choose a date for arriving please</div>";
              $error_data = true;
              $arrivingErr = true;
            }elseif(strtotime($arriving) < strtotime($time)){
            $error_data = true; 
            $arrivingErr = true;
            echo "<div class=\"message error\">Invalid arriving date</div>";
        } 
        if(!$leaving){
            echo "<div class=\"message error\">Choose a date for leaving please</div>";
            $error_data = true;
            $leavingErr = true;
        }
        if(strtotime($leaving) < strtotime($time) && strtotime($leaving) < strtotime($arriving)){
            $error_data = true; 
            $leavingErr = true;
            echo "<div class=\"message error\">Invalid leaving date</div>";
        }

        if ($errordata == false && $firstnameErr == false && $lastnameErr == false && $emailErr == false && $phoneErr == false && $arrivingErr == false && $leavingErr == false){
            $f=fopen("../Profiles/Bookings/" . $_SESSION['username'] . ".txt", "w");
            fputs($f, "\r\n");
            fputs($f, $firstname."\r\n");
            fputs($f, $lastname."\r\n");
            fputs($f, $phone."\r\n");
            fputs($f, $email."\r\n");
            fputs($f, $rooms."\r\n");
            fputs($f, $guests."\r\n");
            fputs($f, $arriving."\r\n");
            fputs($f, $leaving."\r\n");
            fclose($f);
        }
    



}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/Booking.css">

</head>
<body>
<p id="address">31 St Thomas Street, London, SE1 9QU, United Kingdom | Tel: (44 20) 7234 8000</p>
    <ul class="topnav">
        <li><a href="Home.php">HOME</a></li>
        <li><a href="Rooms.php">ROOMS</a></li>
		<li><a href="Health.php">HEALTH & LEISURE</a></li>
        <li><a class= active href="Booking.php">BOOKING</a></li>
        <li><a href="Profile.php">PROFILE</a></li>
        <li><a href="Login.php">LOGIN</a></li>
        <li><a href="Logout.php">LOGOUT</a></li>
    </ul>


    <form class="myForm" action="Booking.php" method="POST" enctype="multipart/form-data">
        <h2>Make a booking:</h2>

        <label><br>First Name:</br></label>
        <input type="text" name="first" placeholder="Enter your first name" required><?php echo $firstnameErr;?>

        <label><br>Last Name:</br></label>
        <input type="text" name="last" placeholder="Enter your last name" required><?php echo $lastnameErr;?>

        <label><br>Phone:</br></label>
        <input type="text" name="phone" placeholder="Enter your phone number" required><?php echo $phoneErr;?>

        <label><br>Email Address:</br></label>
        <input type="text" name="email" placeholder="Enter your email" required><?php echo $emailErr;?>

      <br><br>
        <br><br>

        <div id="options">
            <h2>Tour Details:</h2>
            <label><br>Rooms</br></label>
            <select class="rooms" name="rooms" required>

                <option>-- Please Select --</option>
                <optgroup label="Iconic City View">
                    <option>Single - £270/night</option>
                    <option>Double - £370/night</option>
                </optgroup>

                <optgroup label="Shangri-La Suite">
                    <option>Single - £550/night</option>
                    <option>Double - £700/night</option>
                </optgroup>

                <optgroup label="Premier City View">
                    <option>Single - £200/night</option>
                    <option>Double - £300/night</option>
                </optgroup>

                <optgroup label="Superior Shard Rooms">
                    <option>Single - £220/night</option>
                    <option>Double - £320/night</option>
                </optgroup>


            </select>


                <label><br>Number of Guests:</br></label>
                <select class="guests" name="guests" required>
                    <option>-- Please Select --</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>



        </div>
        <label><br>Arriving:</br></label>
        <input type="date" name="arriving" required><?php echo $timeErr;?>

        <label><br>Leaving:</br></label>
        <input type="date" name="leaving" required><?php echo $timeErr;?>

        <br><br>

		
<button type="submit" name="submit">Submit</button> <button type="reset" class="cancelbtn">Cancel</button>

    </form>



<div class="footer">
    <img id="logo" src="../img/logoo.jpg" alt="">
    <img id="sign" src="../img/shanlogo.jpg" alt="">
    <img id="luxury" src="../img/luxury.jpg" alt="">
</div>

</body>
</html>
