<?php
//check to see if the user us logged in
session_start();
if (isset($_SESSION['admin'])) {
//if your already logged in, redirect to admin panel page
  header("location: index.php?page=adminpanel");
}
 ?>


<form action="verify.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
