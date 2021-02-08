<!--Link the the File that links the Database to the website-->
<!--Link the the File that links the navbar in the website-->
<?php
  include("dbconnect.php");
  include("navbar.php");

if (isset($_GET['page'])) {
  $page = $_GET['page'];
  include("$page.php");
} else {
  include("home.php");
}
 ?>
