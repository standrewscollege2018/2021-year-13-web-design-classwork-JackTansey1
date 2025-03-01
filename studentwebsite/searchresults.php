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
        if(!isset($_POST['search'])) {
          header("Location: search.php");
        }
        $search = $_POST['search'];

        $result_sql = "SELECT * FROM student WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";

        $result_qry = mysqli_query($dbconnect, $result_sql);

        if(mysqli_num_rows($result_qry)==0) {
            echo "<h1>No results found</h1>";
          } else {
            $result_aa = mysqli_fetch_assoc($result_qry);

            do {
              $firstname = $result_aa['firstname'];
              $lastname = $result_aa['lastname'];
              $photo = $result_aa['photo'];
              ?>

              <div class="col-lg-3 col-md-6 img-thumbnail rounded">
                <img src="images/<?php echo $photo; ?>" class="img-fluid" alt="">
                <p><?php echo "$firstname $lastname"; ?></p>
              </div>
            <?php
              } while ($result_aa = mysqli_fetch_assoc($result_qry));


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
