<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script defer src="login.js"></script>
    <title>GSU | Login</title>
    <link rel="icon" href=images/icon.png>
</head>

<?php

define( 'DB_NAME', 'epiz_31667489_users' );
define( 'DB_USER', 'epiz_31667489' );
define( 'DB_PASSWORD', 'Oqwm4rQWA0MS' );
define( 'DB_HOST', 'sql113.epizy.com' );

function validate($username, $password) {

	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
    
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) === 1) {
        setcookie('userid', $_POST['username'], time() + (86400 * 30), "/"); // 86400 = 1 day
        header("Location: action_page.php");
    } else {
        setcookie("userid", "", time() - 3600, '/');
        echo("Please enter valid credentials.");
    }

	mysqli_close($conn);
}

?>


<!-- https://www.w3schools.com/howto/howto_css_login_form.asp -->




<form method="post">
    <div><button id="home-id" class="home"><i class="fa fa-home fa-lg"></i> Home</button></div>
    <div class="imgcontainer">
      <img src="images/logo.png" alt="logo" class="avatar">
    </div>
    
  
    <div class="container">
 
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit">Login</button>

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  
    <div class="container" style="background-color:#f1f1f1">
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>

  
  <?php
      validate($_POST['username'], $_POST['password'])
      ?>