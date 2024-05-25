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
<div class="container-fluid mt-3">
  <h3>Tabel Program Studi</h3>
  <p>Silahkan isi program studi baru</p>
  <form method="post">
  <div class="form-group">
    <label for="kodeprodi">Kode prodi</label> 
    <input id="kodeprodi" name="kodeprodi" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="namaprodi">Nama program studi</label> 
    <input id="namaprodi" name="namaprodi" type="text" class="form-control">
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Simpan Baru</button>
  </div>
</form>
<?php include('koneksi.db.php');
if(isset($_POST['submit'])) {
	$kodeprodi=$_POST['kodeprodi'];
	$namaprodi=$_POST['namaprodi'];
	$sql="INSERT INTO `prodi`(`kodeprodi`, `namaprodi`) VALUES ('".$kodeprodi."','".$namaprodi."')";
	$q=mysqli_query($koneksi,$sql);
	if ($q) {
		echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success!</strong> Record saved !.
</div>';
	} else {
		echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Failed!</strong> Record unsaved !.
</div>';
	}
}
?>
</div>
</body>
</html>


