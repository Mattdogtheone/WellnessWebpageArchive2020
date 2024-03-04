<!DOCTYPE html>
<html lang="en">
<head>
    <style media="print">
        #address, .container, .summary, .responsive, .topnav, .clearfix, .footer{
            display: none;
        }
        body{
            background-color:palegoldenrod;
        }
    </style>
    <meta charset="UTF-8">
    <title>Health</title>
    <link rel="stylesheet" href="../css/Health.css">

</head>
<body>
<p id="address">31 St Thomas Street, London, SE1 9QU, United Kingdom | Tel: (44 20) 7234 8000</p>
<ul class="topnav">
    <li><a href="Home.php">HOME</a></li>
    <li><a href="Rooms.php">ROOMS</a></li>
	<li><a class="active" href = "Health.php">HEALTH & LEISURE</a></li>
    <li><a href="Booking.php">BOOKING</a></li>
    <li><a href="Profile.php">PROFILE</a></li>
    <li><a href="Login.php">LOGIN</a></li>
    <li><a href="Logout.php">LOGOUT</a></li>
</ul>
<div class="container">
    <img id="prepri" src="../img/skypool2.jpg" alt="">
    <div class="text-block">
        <h2>HEALTH & LEISURE</h2>
        <p>Revitalize & rejuvenate with us...</p>
    </div>
</div>
<div class="lilimg">
    <div class="icons">
        <img src="../img/pool.jpg" alt=""/>
        <img src="../img/yoga.jpg" alt=""/>
        <img src="../img/feed.jpg" alt=""/>
    </div>
</div>

<audio autoplay loop>
    <source src="../audio/calmdown.mp3" type="audio/mpeg">
</audio>

<div class="summary">
     <p> A fully equipped gym is located on level 52, with floor-to-ceiling windows providing panoramic views of London’s skyline.</p>
    <p> The Skypool offers an exclusive escape for hotel guests, who may also indulge in relaxing spa treatments, either in the comfort of their room or in one of the spa residences.</p>
    <p> We offer a variety of wellbeing services including massages, beauty treatments, hairdressing, nails and make-up through our independent partners, London Serenity and Viva Therapy.
        These bespoke services are offered at any time during the day, seven days a week in the comfort of your room or in the dedicated treatment room</p>
    <p> Ready for the ultimate weekend treat? Wake up with our energizing morning yoga session with Frame, followed by a healthy buffet brunch and a masterclass on making your own bespoke facial Oil, with Neal’s Yard Remedies.</p>
    <p> Live your life beyond limits with the help of wellness and recovery therapies that are tailored to your needs. REVIV’S signature IV therapies and vitamin injections will help you feel energized, invigorated, stimulated and refreshed from the comfort of your room.</p>

</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../img/skypool.jpg">
            <img src="../img/skypool.jpg" alt="" >
        </a>
    </div>
</div>


<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../img/gym.jpg">
            <img src="../img/gym.jpg" alt="">
        </a>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../img/spa.jpg">
            <img src="../img/spa.jpg" alt="">
        </a>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../img/spirit.jpg">
            <img src="../img/spirit.jpg" alt="">
        </a>
    </div>
</div>

<div class="clearfix"></div>

<?php
    include_once('Footer.php');
?>





</body>
</html>