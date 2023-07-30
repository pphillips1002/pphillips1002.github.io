<?php

if(!isset($_COOKIE['userid'])) {
  header("Location: login.php");
} else {
  echo "username: {$_COOKIE['userid']}<br>";
}
print("<a href='./login.php'>Go back to login</a><br>");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="action.css">
    <script defer src="aboutus.js"></script>
    <title>GSU | MyAccessibility</title>
    <link rel="icon" href=images/icon.png>
</head>

<body>

<div class=homepage>
      <!-- header -->
      <div class=pageHeader>
        <div><button id="home-id" class="home"><i class="fa fa-home fa-lg"></i> Home</button></div>
        <div class="logo"><div class="logoIcon"></div></div> <br><br><br>
        <h1> Congrats! You Logged In!</h1> 

        <p>Click here to <a href = "logout.php" tite = "Logout"> logout.<p>


    </div>


</div>
    <span class="footerCopyright">&nbsp© 2022 Pierce Phillips</span>
  </div>

</body>
