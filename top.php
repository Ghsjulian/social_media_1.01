<?php
session_start();
$info = $_SESSION['user_info'];
$user_id = $info['user_id'];
include('database/conn.php');
if ($user_id) {
  // code...
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8" />
  <meta
  name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no"
  />
<meta
name="description"
content="G H S J U L I A  N | Ghs Julian | Web Developer And Designer | Ghs Julian Programmer | PHP Developer & Programmer | Programmer Ghs Julian"
/>
<meta
name="author"
content="G H S J U L I A  N | Ghs Julian | Web Developer And Designer | Ghs Julian Programmer | PHP Developer & Programmer | Programmer Ghs Julian"
/>
<title>
G H S J U L I A N | Ghs Julian | Web Developer And Designer | Ghs Julian
Programmer | PHP Developer & Programmer | Programmer Ghs Julian
</title>
<link rel="stylesheet" type="text/css" href="css/w3.css" />
<link rel="stylesheet" type="text/css" href="css/i4ndex.css" />
<link rel="stylesheet" type="text/css" href="css/home.css" />
<link rel="stylesheet" type="text/css" href="css/update_info.css" />
<link rel="stylesheet" type="text/css" href="css/popup.css" />

<link rel="stylesheet" type="text/css" href="css/login.css" />

<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/bts.min.css" />

<script src="js/jquery.min.js"></script>
</head>
<body class="reload">
<div id="__header" class="icon-bar fixed-top">
<a class="page back" onclick="openNav('Home')" href="#"
><img class="arrow" src="images/home5.png"
/></a>
<a class="page hide" onclick="openNav('Profile')" href="#"
><img src="images/male.png"
/></a>
<a id="msg" class="page hide" onclick="openNav('Messages')" href="#"
><img src="images/email2.png"
/>5</a>
<a id="noti" class="page hide" onclick="openNav('Notification')" href="#"
><img src="images/bell-ring.png"
/>
</a>
<a class="page hide mnu" href="#"
><img src="images/menu2.png" class="mobile-nav-toggle" id="nav_btn"
/></a>
</div>




<!---- MOBILE MENU ---->




<div id="header">
<div class="d-flex flex-column">
<div class="_profile">
<img
src="upload/<?php echo $info['user_image']; ?>"
alt=""
class="img-fluid rounded-circle"
/>
<h1 class="text-light">
<a href="#"><?php echo $info['user_name']; ?></a>
</h1>
<div class="social-links mt-3 text-center">
<center>
<a href="#" class="twitter"><img src="images/twitter.svg" /></a>
<a href="#" class="facebook"><img src="images/facebook.svg" /></a>
<a href="#" class="instagram"
><img src="images/instagram.svg"
/></a>
<a href="#" class="google-plus"
><img src="images/youtube.svg"
/></a>
</center>
</div>
</div>

<nav id="navbar" class="nav-menu navbar">
<ul>
<a onclick="openNav('Home')" id="link" href="#">Home</a>
<a onclick="openNav('Edit')" id="link" href="#">Edit Profile</a>
<a onclick="openNav('Post')" id="link" href="#">Write Post</a>
<a id="link" onclick="openNav('People')" href="#">Find Peoples</a>
<a onclick="openNav('Logout')" id="link" href="#">Logout</a>
<a id="link" href="contact.php">Contact Me</a>
<a onclick="openNav('About')" id="link" href="#">Abou Me</a>
</ul>
</nav>
</div>
</div>






<?php
} else {
header('location : login.php');
}
?>