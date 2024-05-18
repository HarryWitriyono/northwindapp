<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Employee form</h2>
<form method="post">
  <div class="form-group row">
    <label for="firstname" class="col-4 col-form-label">Firstname</label> 
    <div class="col-8">
      <input id="firstname" name="firstname" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="lastname" class="col-4 col-form-label">Lastname</label> 
    <div class="col-8">
      <input id="lastname" name="lastname" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="Password" name="Password" type="password" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Insert</button>
    </div>
  </div>
</form>
<?php include('koneksi.db.php');
 if (isset($_POST['submit'])) {
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $Password=$_POST['Password'];
  $sql="INSERT INTO `employee`(`lastname`, `firstname`, `email`, `Password`) VALUES ('".$lastname."','".$firstname."','".$email."','".$Password."')";
  $q=mysqli_query($koneksi,$sql);
  if ($q) {
	  echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success!</strong> Record saved !.
</div>';
  } else {
	  echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Fail!</strong> Record not saved !.
</div>';
  }
 }
?>
</div>
</body>
</html>