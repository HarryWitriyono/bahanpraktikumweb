<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Sistem Informasi Manajemen Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Help</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p>HP / WA ☎️ : +62 815 390 2534</p>
    <p>Email 📧 : harrywitriyono@umb.ac.id</p>
    <button class="btn btn-secondary" type="button">🚪 Close</button>
  </div>
</div>  
<div class="container-fluid">
  <h1 class="navbar bg-success justify-content-center justify-content-center text-white rounded-5">Login Sistem Informasi Manajemen Mahasiswa</h1>
  <!--p>This part is inside a .container-fluid class.</p>
  <p>The .container-fluid class provides a full width container, spanning the entire width of the viewport.</p-->  
  <div class="row">
   <div class="col">
    <form method="post">
  <div class="form-group row">
    <label for="KodeLogin" class="col-4 col-form-label">Kode Login</label> 
    <div class="col-8">
      <input id="KodeLogin" name="KodeLogin" placeholder="💳" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="Password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="Password" name="Password" placeholder="🔑" type="password" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
<?php 
if (isset($_POST['submit'])) {
	$KodeLogin=$_POST['KodeLogin'];
	$Password=$_POST['Password'];
	include('koneksi.db.php');
	$sql="SELECT `KodeLogin`, `Password` FROM `login` WHERE `KodeLogin`='".$KodeLogin."' and `Password`='".$Password."'";
	$q=mysqli_query($koneksi,$sql);
	$r=mysqli_fetch_array($q);
	if (!empty($r)) {
		echo "<script>window.location.href='menu.php';</script>";
	} else {
		echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Failed !</strong> Wrong credential information !
</div>';
	}
}
?>
   </div>
   <div class="col">
    <div class="card img-fluid text-white bg-danger" style="width:500px">
    <img class="card-img-top" src="https://umb.ac.id/wp-content/uploads/2024/03/coverumb-1.png" alt="Card image" style="width:100%" height="300px">
    <div class="card-img-overlay">
      <h4 class="card-title">Sistem Informasi Manajemen Mahasiswa</h4>
      <p class="card-text">Bila anda butuh bantuan silah kontak dengan klik tombol Help</p>
      <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#demo">Help</a>
    </div>
  </div>
   </div>
  </div>  
</div>

</body>
</html>
