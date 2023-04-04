<?php
session_start();
$info = $_SESSION['user_info'];
$user_id = $info['user_id'];
if (!$user_id) {
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

<link rel="stylesheet" type="text/css" href="css/login.css" />
<link rel="stylesheet" type="text/css" href="css/w3.css" />
</head>
<body>
<div id="login" class="login">
<center>
<h1>Create Account</h1>
<img src="images/user.svg" />
<a href="http://localhost:8000/Admin/login.html">Gooooo</a>
<form id="myfrm" method="POST">
<p id="_error"></p>
<label for="username">
<i class="fas fa-user"></i>
<input
type="text"
name="action"
placeholder="Enter Name "
id="action"
hidden="true"
value="Registration"
/>
</label>
<input
type="text"
name="user_name"
placeholder="Enter Name "
id="name"
autocomplete="on"
onfocus="true"
/>
<input
type="email"
name="user_email"
placeholder="Enter Email"
id="email"
autocomplete="on"
onfocus="true"
accept="email"
/>
<input
type="password"
name="user_password"
placeholder="Enter Password"
id="password"
autocomplete="on"
onfocus="true"
/>
<button name="Registration" type="submit" id="__btn">
Registration
</button>
</form>
<strong id="info"><a href="login.php">Already Have An Account?</a></strong>
</center>
</div>

<!---------------->
<script type="module" src="./js/MAIN.JS"></script>
<script type="module" src="./js/index.js"></script>
</body>
</html>
<?php

} else {
header('location : profile.php');
}

?>