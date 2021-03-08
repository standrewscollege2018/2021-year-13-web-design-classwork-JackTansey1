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
    if(!isset($_GET['tutorgroupID'])) {
      header("Location: index.php");
    } else {
      $tutorcode = $_GET['tutorcode'];
      $tutorgroupID = $_GET['tutorgroupID'];
      $tutor_sql = "SELECT * FROM student WHERE tutorgroupID=$tutorgroupID";
      $tutor_qry = mysqli_query($dbconnect, $tutor_sql);

      if(mysqli_num_rows($tutor_qry)==0) {
        echo "<p>No students in $tutorcode</p>";
      } else {
        $tutor_aa = mysqli_fetch_assoc($tutor_qry);

      echo "<div class='text-center col-lg-12 col-md-12 img-thumbnail rounded'>";

          echo "<h1>$tutorcode</h1>";
           ?>
        </div>

        <?php
        do {
          $firstname = $tutor_aa['firstname'];
          $lastname = $tutor_aa['lastname'];
          $photo = $tutor_aa['photo'];
        ?>

        <div class="col-lg-3 col-md-6 img-thumbnail rounded">
          <?php
          echo "<img src='images/$photo' class='img-fluid'>";
          echo "<p>$firstname $lastname</p>";
          ?>
          </div>
          <?php
            } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
            }
            }
          ?>



    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
