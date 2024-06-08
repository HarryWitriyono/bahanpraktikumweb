<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIM Mahasiswa V.2024 - Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Heading</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p>Some text lorem ipsum.</p>
    <p>Some text lorem ipsum.</p>
    <button class="btn btn-secondary" type="button">A Button</button>
  </div>
</div>
<div class="container mt-3">
  <h2 class="navbar navbar-expand-sm bg-success text-white justify-content-center rounded-5">Login form</h2>
  <div class="row">
   <div class="col">
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="KodeLogin">Kode Login:</label>
      <input type="text" class="form-control" id="KodeLogin" placeholder="Enter kode login" name="KodeLogin">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="Password" placeholder="Enter password" name="Password">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Login</button>
  </form>
  <?php
  if (isset($_POST['submit'])) {
	  $KodeLogin=filter_var($_POST['KodeLogin'],FILTER_SANITIZE_STRING);
	  $Password=filter_var($_POST['Password'],FILTER_SANITIZE_STRING);
	  include_once('koneksi.db.php');
	  $sql="SELECT * FROM `login` WHERE KodeLogin='".$KodeLogin."' and Password='".$Password."'";
	  $q=mysqli_query($koneksi,$sql);
	  $r=mysqli_fetch_array($q);
	  if (!empty($r)) {
		  echo "<script>window.location.href='menu.php';</script>";
	  } else {
		  echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Gagal!</strong> Informasi login anda salah !
</div>';
	  }
  }
  ?>
  </div>
   <div class="col">
    <div class="card bg-danger text-white" style="width:500px">
  <img class="card-img-top" src="https://umb.ac.id/wp-content/uploads/2024/03/coverumb-1.png" alt="Card image" height="250px">
  <div class="card-img-overlay">
    <h4 class="card-title">SISTEM INFORMASI MANAJEMEN MAHASISWA PROGRAM STUDI</h4>
    <p class="card-text">Silahkan login dengan akun yang telah diberikan, belum ada akun, kontak di halaman bantuan</p>
    <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#demo">Help</a>
  </div>
</div>
   </div>
  </div>
</div>

</body>
</html>
