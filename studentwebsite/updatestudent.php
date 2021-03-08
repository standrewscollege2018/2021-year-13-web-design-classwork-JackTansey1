<?php
$studentID=$_GET['studentID'];
$firstname=$_POST['firstname'];
$tutorgroupID=$_POST['tutorgroupID'];
$lastname=$_POST['lastname'];
$student_sql= "UPDATE student SET firstname='$firstname', lastname='$lastname', tutorgroupID='$tutorgroupID' Where studentID=$studentID";
$student_qry = mysqli_query($dbconnect, $student_sql);
 ?>
