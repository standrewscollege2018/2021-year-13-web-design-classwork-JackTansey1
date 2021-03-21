<?php
//check to see if the user us logged in
session_start();
if (!isset($_SESSION['admin'])) {
//not logged in users will be redirected to home page
  header("location: index.php");
}
 ?>


<a class="" href="index.php?page=addtutor">Add TutorGroup</a>
<a class="" href="index.php?page=deletestudentselect">Delete Student</a>
<a class="" href="index.php?page=updatestudentselect">Update Student</a>
<a class="" href="logout.php">logout</a>
