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
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/home.css" />
<link rel="stylesheet" type="text/css" href="css/update_info.css" />
<link rel="stylesheet" type="text/css" href="css/popup.css" />

<link rel="stylesheet" type="text/css" href="css/login.css" />

</head>
<body class="w3-light-grey">
<!--- Nav Bar Started --->

<div id="app">
<div class="w3-topnav w3-large nav">
<strong style="-webkit-text-stroke: 1px #ffffff">WEB DEVELOPER</strong>
<a href="/">Home</a>
<a href="profile.php">Profile</a>
<a href="notification.php">Notification</a>
<a href="update_profile.php">Edit Profile</a>
<a href="find_people.php">Peoples</a>
<a href="message.php">Messages</a>
<a href="about.php">Abou Me</a>
<button class="mobile-nav-toggle" id="nav_btn">=</button>
</div>
<br /><br />
<div id="header">
<div class="d-flex flex-column">
<div class="profile">
<img
src="upload/<?php echo $info['user_image']; ?>"
alt=""
class="img-fluid rounded-circle"
/>
<h1 class="text-light"><a href="#"><?php echo $info['user_name']; ?></a></h1>
<div class="social-links mt-3 text-center">
<center>
<a href="#" class="twitter"><img src="images/twitter.svg"></a>
<a href="#" class="facebook"
><img src="images/facebook.svg"></a
>
<a href="#" class="instagram"
><img src="images/instagram.svg"></a
>
<a href="#" class="google-plus"
><img src="images/youtube.svg"></a
>
</center>
</div>
</div>

<nav id="navbar" class="nav-menu navbar">
<ul>
<a id="link" href="/">Home</a>
<a id="link" href="profile.php">Profile</a>
<a id="link" href="update_profile.php">Edit Profile</a>
<a id="link" href="notification.php">Notification</a>
<a id="link" href="find_people.php">Find Peoples</a>
<a id="link" href="message.php">Messages</a>
<a id="link" href="database/logout.php">Logout</a>
<a id="link" href="contact.php">Contact Me</a>
<a id="link" href="about.php">Abou Me</a>
</ul>
</nav>
</div>
</div>
</div>
<br />

<?php
} else {
header('location : login.php');
}
?>