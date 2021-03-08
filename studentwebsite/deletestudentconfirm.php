<!doctype html>
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
  <div class="row">
    <?php
      $studentID = $_GET['studentID'];
      $student_sql = "SELECT * FROM student WHERE studentID=$studentID";
      $student_qry = mysqli_query($dbconnect, $student_sql);
      $student_aa=mysqli_fetch_assoc($student_qry);
        do {
          $firstname = $student_aa['firstname'];
          $lastname = $student_aa['lastname'];
          $photo = $student_aa['photo'];
        ?>

        <div class="col-lg-3 col-md-6 img-thumbnail rounded">
          <?php
          echo "<img src='images/$photo' class='img-fluid'>";
          echo "<p>$firstname $lastname</p>";
          ?>
          </div>
          <?php
            } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));


          ?>



    </div>
    <p>Are you sure you want to remove this Person? </p>
    <a href="index.php?page=deletestudent&studentID=<?php echo $studentID; ?>&photo=<?php echo $photo; ?>">Yep</a>
    <a href="index.php">Nevermind, Back To Home Page</a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
