<?php 
include_once('koneksi.db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Program Studi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
 <div class="row">
  <h2 class="col-sm-4">Koreksi Program Studi</h2>
 </div> 
 <?php
 if (isset($_GET['kodeprodi'])) {
  $kodedikoreksi=$_GET['kodeprodi'];
  $sql="select * from prodi where kodeprodi='".$kodedikoreksi."'";
  $q=mysqli_query($kon,$sql);
  $r=mysqli_fetch_array($q);
  if (empty($r)) {
		echo '
		<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Tidak ada rekordnya!</strong> Tidak ada rekord yang sesuai dengan kriteria pencariannya !.
</div>
		';
		exit();
	}
 } //end jika isset kode prodi
 ?>
 <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="kodeprodi">Kode Prodi:</label>
      <input type="text" class="form-control" id="kodeprodi" placeholder="Ketik kode prodinya" name="kodeprodi" 
	  value="<?php echo $r['kodeprodi'];?>">
    </div>
    <div class="mb-3">
      <label for="namaprodi">Nama Prodi:</label>
      <input type="text" class="form-control" id="namaprodi" placeholder="Enter nama prodi" name="namaprodi"
	  value="<?php echo $r['namaprodi'];?>"
	  >
    </div>
   
    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
	<button type="
  </form>
  <?php 
  if (isset($_POST['bSimpan'])) {
	$kodeprodi=$_POST['kodeprodi'];
    $namaprodi=$_POST['namaprodi'];
    $sql="update prodi set namaprodi='".$namaprodi."' where kodeprodi='".$kodeprodi."'";
    $q=mysqli_query($kon,$sql);
    if ($q) {
     echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Sudah disimpan !</strong> Rekord yang dikoreksi sudah disimpan !.
</div>';
	} else {
	 echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Gagal disimpan !</strong> Rekord yang dikoreksi gagal disimpan !.
</div>';
	} 		
  } 
  ?>
</div>
</body>
</html>
