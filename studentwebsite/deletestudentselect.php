<div class=" align-center col-lg-12 col-md-12 rounded p-2 mt-1 text-center ">
  <h1>Delete Student</h1>
</div>
<div class="row">
  <?php


    $student_sql = "SELECT * FROM student";
    $student_qry = mysqli_query($dbconnect, $student_sql);

    if(mysqli_num_rows($student_qry)==0) {
      echo "<p>No students left to delete</p>";
    } else {
      $student_aa = mysqli_fetch_assoc($student_qry);


      do {
        $firstname = $student_aa['firstname'];
        $lastname = $student_aa['lastname'];
        $photo = $student_aa['photo'];
        $studentID = $student_aa['studentID'];
      ?>

      <div class="col-lg-3 col-md-6 img-thumbnail rounded">
        <a href="index.php?page=deletestudentconfirm&studentID=<?php echo $studentID; ?>">
        <?php
        echo "<img src='images/$photo' class='img-fluid'>";
        echo "<p>$firstname $lastname</p>";
        ?>
      </a>
        </div>
        <?php
          } while ($student_aa = mysqli_fetch_assoc($student_qry));
          }

        ?>



  </div>
