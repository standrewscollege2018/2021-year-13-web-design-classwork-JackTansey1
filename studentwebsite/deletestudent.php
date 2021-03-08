<?php
$studentID=$_GET['studentID'];
$photo=$_GET['photo'];
$student_sql= "DELETE FROM student Where studentID=$studentID";
$student_qry = mysqli_query($dbconnect, $student_sql);
unlink("images/$photo");
 ?>
