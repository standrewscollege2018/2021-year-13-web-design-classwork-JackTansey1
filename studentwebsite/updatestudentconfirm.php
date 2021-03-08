
  <?php
    $studentID = $_GET['studentID'];
    $student_sql = "SELECT * FROM student WHERE studentID=$studentID";
    $student_qry = mysqli_query($dbconnect, $student_sql);
    $student_aa=mysqli_fetch_assoc($student_qry);

        $firstname = $student_aa['firstname'];
        $lastname = $student_aa['lastname'];
        $photo = $student_aa['photo'];
        $student_tutorID = $student_aa['tutorgroupID'];
      ?>

      <?php

      $tutor_sql = "SELECT * FROM tutorgroup";
      $tutor_qry = mysqli_query($dbconnect, $tutor_sql);
      $tutor_aa = mysqli_fetch_assoc($tutor_qry);
       ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="text-center img-fluid align-center col-lg-12 col-md-12 rounded p-2 mt-1">
    <form class="" action="index.php?page=updatestudent&studentID=<?php echo $studentID; ?>" method="post">


    <h1>Update Students</h1>
    <p></p>
    <p>First Name</p>
    <div class="input-group img-fluid text-center mb-1 rounded">
    <div class="input-group-prepend">
    </div>
    <input name="firstname" type="text" class="form-control" value="<?php echo $firstname;  ?>" aria-label="Username" aria-describedby="basic-addon1">
  </div>
  <p></p>
  <p>Last Name</p>
  <div class="input-group img-fluid text-center mb-1 rounded">
  <div class="input-group-prepend">
  </div>
  <input name="lastname" type="text" class="form-control" placeholder="Last Name" value="<?php echo $lastname;  ?>" aria-label="Username" aria-describedby="basic-addon1">
</div>


 <p></p>
 <div class="form-group">
    <label for="exampleFormControlSelect1">Tutor Groups</label>

    <select name="tutorgroupID"class="form-control" id="exampleFormControlSelect1">

    <?php
      do {
        $tutorgroupID = $tutor_aa['tutorgroupID'];
        $tutorcode = $tutor_aa['tutorcode'];
        if ($tutorgroupID==$student_tutorID) {
          $required = "selected";
        } else {
          $required = "";
        }
        echo "<option $required value=$tutorgroupID>$tutorcode</option>";

       } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))
    ?>
      </select>
      <button type="submit" class="align-center btn btn-primary btn-sm mt-2">Submit</button>
  </div>
<?php
echo "<img src='images/$photo' class='img-fluid mt-3'>";
 ?>


</div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
