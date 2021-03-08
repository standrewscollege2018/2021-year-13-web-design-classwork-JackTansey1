<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-darkblue">
  <a class="navbar-brand text-light font-weight-bold" href="index.php">St Andrews College</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <?php

    $tutor_sql = "SELECT * FROM tutorgroup";
    $tutor_qry = mysqli_query($dbconnect, $tutor_sql);
    $tutor_aa = mysqli_fetch_assoc($tutor_qry);
     ?>
     <!--Basic Text saying Tutor groups-->
     <div class="text-center  col-lg-12 col-md-12 rounded">
       <h2>Tutor groups</h2>
       <?php
         do {
           $tutorgroupID = $tutor_aa['tutorgroupID'];
           $tutorcode = $tutor_aa['tutorcode'];

           echo "<a href='index.php?page=tutorgroup&tutorgroupID=$tutorgroupID&tutorcode=$tutorcode'>$tutorcode</a>";

          } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))
       ?>
     </div>
     <div class="text-center col-lg-12 col-md-12">
       <p><a href="index.php?page=addtutor">Add tutor</a>
         <a href="index.php?page=deletestudentselect">Delete student</a>
         <a href="index.php?page=updatestudentselect">Update Student</a>
       </p>
     </div>
     <div class=" img-fluid text-center col-lg-12 col-md-12 rounded">
       <h2>Search for student</h2>
       <form class="" action="index.php?page=searchresults" method="post">
         <input required type="text" name="search" placeholder="Student name">
         <button type="submit" name="button">Search</button>
       </form>

     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
