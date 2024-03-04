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
    <title>Rooms</title>
    <link rel="stylesheet" href="../css/Rooms.css">

</head>
<body>
<p id="address">31 St Thomas Street, London, SE1 9QU, United Kingdom | Tel: (44 20) 7234 8000</p>
<ul class="topnav">
    <li><a href="Home.php">HOME</a></li>
    <li><a class="active" href="Rooms.php">ROOMS</a></li>
	<li><a href="Health.php">HEALTH & LEISURE</a></li>
    <li><a href="Booking.php">BOOKING</a></li>
    <li><a href="Profile.php">PROFILE</a></li>
    <li><a href="Login.php">LOGIN</a></li>
    <li><a href="Logout.php">LOGOUT</a></li>
</ul>
<div class="container">
    <img id="prepri" src="../img/shangback.jpg" alt="">
    <div class="text-block">
        <h2>Rooms</h2>
        <p>The Shangri-La Hotel selection of rooms and apartments</p>
    </div>
</div>

<div class="summary">
    <p id="title">The 34th to 52nd floors of Renzo Piano’s iconic building house the hotel, which is Shangri-La’s first property in the UK.</p>
    <p>When you arrive, you savour a refreshing cup of Chinese tea at TĪNG on level 35, before making your way to your spacious room. Here, floor to ceiling windows showcase breathtaking views of vibrant London, and you watch the life of the city unfold along the River Thames.
        Floor-to-ceiling windows unlock sublime views from all 202 rooms and suites, each highlighted by sophisticated décor with Chinoiserie touches.
        Body-contouring beds draped in luxury Frette linens make for a relaxing stay, while marble-clad bathrooms feature heated floors and mirror-embedded televisions.</p>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../img/iconic.jpg">
            <img src="../img/iconic.jpg" alt="" width="600" height="400">
        </a>
        <div class="desc">Iconic City View</div>
    </div>
</div>


<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../img/shangrila.jpg">
            <img src="../img/shangrila.jpg" alt="" width="600" height="400">
        </a>
        <div class="desc">Shangri-La Suite</div>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../img/premier.jpg">
            <img src="../img/premier.jpg" alt="" width="600" height="400">
        </a>
        <div class="desc">Premier City View</div>
    </div>
</div>

<div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../img/superior.jpg">
            <img src="../img/superior.jpg" alt="" width="600" height="400">
        </a>
        <div class="desc">Superior Shard Rooms</div>
    </div>
</div>

<div class="clearfix"></div>

<h1>Prices:</h1>

<table style="width:100%">
    <tr id="firstrow">
        <th id = "rooms">Room</th>
        <th id = "type">Single/double</th>
        <th id = "price">1 person/night</th>
    </tr>
    <tr class="otherrow">
        <td headers = "rooms">Premier City View</td>
        <td headers = "type">Single</td>
        <td headers = "price">£200</td>
    </tr>
    <tr class="otherrow">
        <td headers = "rooms">Premier City View</td>
        <td headers = "type">Double</td>
        <td headers = "price">£300</td>
    </tr>
    <tr class="otherrow">
        <td headers = "rooms">Superior Shard Rooms</td>
        <td headers = "type">Single</td>
        <td headers = "price">£220</td>
    </tr>
    <tr class="otherrow">
        <td headers = "rooms">Superior Shard Rooms</td>
        <td headers = "type">Double</td>
        <td headers = "price">£320</td>
    </tr>
    <tr class="otherrow">
        <td headers = "rooms">Iconic City View</td>
        <td headers = "type">Single</td>
        <td headers = "price">£270</td>
    </tr>
    <tr class="otherrow">
        <td headers = "rooms">Iconic City View</td>
        <td headers = "type">Double</td>
        <td headers = "price">£370</td>
    </tr>
    <tr class="otherrow">
        <td headers = "rooms">Shangri-La Suite</td>
        <td headers = "type">Single</td>
        <td headers = "price">£550</td>
    </tr>
    <tr class="otherrow">
        <td headers = "rooms">Shangri-La Suite</td>
        <td headers = "type">Double</td>
        <td headers = "price">£700</td>
    </tr>
</table>

<?php
    include_once('Footer.php');
?>





</body>
</html>