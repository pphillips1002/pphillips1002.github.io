<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have logged out successfully... returning to homepage';
   header('Refresh: 2; URL = index.html');
?>