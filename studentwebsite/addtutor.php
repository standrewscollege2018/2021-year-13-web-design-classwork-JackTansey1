
<form action="index.php?page=entertutor" method="post" enctype="multipart/form-data">
<div class="text-center img-fluid align-center col-lg-12 col-md-12 rounded p-2 mt-1">
  <div class="form-group">
    <p></p>
    <h1>Add Tutor</h1>
    <label for="tutorname">Tutor Name</label>
    <input name="tutor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tutor Name">
    </div>

  <div class="form-group">
    <label for="tutorcode">Tutor Code</label>
    <input name="tutorcode" type="text" class="form-control" id="exampleInputPassword1" placeholder="Tutor Code">
  </div>
<!-- add a custom image to a database -->
  <div class="mb-3">
    <input type="file" name="fileToUpload" id="fileToUpload">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
