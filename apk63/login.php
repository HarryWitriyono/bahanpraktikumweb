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
 <div class="row">
  <h2 class="navbar navbar-expand-sm bg-success justify-content-center rounded-5">Login Form</h2>
  <div class="col-sm-6">
  <form method="post">
  <div class="form-group">
    <label for="KodeLogin">Kode Login</label> 
    <input id="KodeLogin" name="KodeLogin" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="Password">Password</label> 
    <input id="Password" name="Password" type="password" class="form-control">
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Login</button>
  </div>
</form>
<?php 
if (isset($_POST['submit'])) {
	include('koneksi.db.php');
	$KodeLogin=$_POST['KodeLogin'];
	$Password=$_POST['Password'];
	$sql="SELECT `KodeLogin`, `Password` FROM `login` WHERE `KodeLogin` = '".$KodeLogin."' and `Password` = '".$Password."'";
	$q=mysqli_query($koneksi,$sql);
	$r=mysqli_fetch_array($q);
	if (!empty($r)) {
		echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="window.location.href=\'menu.php\';"></button>
  <strong>Success!</strong> Close this message to go the menu.
</div>';
	} else {
		echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="window.history.back();"></button>
  <strong>Fail!</strong> Wrong credential !.
</div>';
	}
}
?>
  </div>
  <div class="col-sm-6">
  <div class="offcanvas offcanvas-start rounded-5" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Help</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p>Kontak ☎️ 08153902534</p>
    <p>Email ✉️ harrywitriyono@gmail.com</p>
    <p>Silahkan dikontak dalam jam kerja.</p>
    <button class="btn btn-secondary" data-bs-dismiss="offcanvas" type="button">📥</button>
  </div>
</div>
  <div class="card" style="width:100%" height="50px">
  <img class="card-img-top" src="img_avatar3.png" alt="Card image" width="100%" height="250px">
  <div class="card-img-overlay">
    <h4 class="card-title text-warning">Sistem Informasi Mahasiswa Per Prodi</h4>
    <p class="card-text text-white">Aplikasi untuk manajemen mahasiswa per program studi.</p>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
    Help
  </button>
  </div>
</div>
  </div>
 </div>
</div>

</body>
</html>
