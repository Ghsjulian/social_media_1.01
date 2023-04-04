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
      <!---------------->
        <div id="login" class="login">
          <center>
            <h1>Please L o g i n</h1>
        <img src="images/user.svg" />
            <form id="myfrm" action="" method="POST">
              <p id="_error"></p>
              <label for="username">
                <i class="fas fa-user"></i>
              </label>
              <input
                type="text"
                name="action"
                placeholder="Enter Name "
                value="Login"
                id="action"
                autocomplete="on"
                hidden="true"
              />
              <input
                type="text"
                name="name"
                placeholder="Enter Name "
                id="name"
                autocomplete="on"
                onfocus="true"
              />
              <input
                type="text"
                name="email"
                placeholder="Enter Phone/Email"
                id="email"
                value="ghsjulian@gmail.com"
                autocomplete="on"
                onfocus="true"
                hidden="true"
              />
              <input
                type="password"
                name="password"
                placeholder="Enter Password"
                id="password"
                autocomplete="on"
                onfocus="true"
              />
              <button type="submit" id="__btn">Login</button>
            </form>
            <strong id="info"
              ><a href="register.php">Don't Have An Account?</a></strong
            >
          </center>
        </div>
    
      <!---------------->
  
    <!---------------->
    <script type="module" src="./js/MAIN.JS"></script>
    <script type="module" src="./js/index.js"></script>
  </body>
</html>
<?php
} else {
  header('location : home.php');
}
?>