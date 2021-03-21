<?php
//start session running on the page
session_start();
//unset the admin session, effectivly logging the user out
unset($_SESSION['admin']);
//redircts the user to homepage
header("location: index.php");

 ?>
