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
  <h3>Tabel Mahasiswa</h3>
  <p>Silahkan isi mahasiswa baru</p>
  <form method="post">
  <div class="form-group">
    <label for="npm">Nomor Pokok Mahasiswa</label> 
    <input id="npm" name="npm" type="text" class="form-control" required="required">
  </div>
  <div class="form-group">
    <label for="namamahasiswa">Nama mahasiswa</label> 
    <input id="namamahasiswa" name="namamahasiswa" type="text" class="form-control" required="required">
  </div>
  <div class="form-group">
    <label for="sex">Jenis Kelamin</label> 
    <div>
      <select id="sex" name="sex" class="form-select" required="required">
        <option value="Perempuan">Perempuan</option>
        <option value="Laki-laki">Laki-laki</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="tempatlahir">Tempat lahir</label> 
    <input id="tempatlahir" name="tempatlahir" type="text" class="form-control" required="required">
  </div>
  <div class="form-group">
    <label for="tanggallahir">Tanggal lahir</label> 
    <input id="tanggallahir" name="tanggallahir" type="date" class="form-control" required="required">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label> 
    <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="kodeprodi">Kode prodi</label> 
    <div>
      <select id="kodeprodi" name="kodeprodi" class="form-select" required="required">
	  <?php include('koneksi.db.php'); 
	  $sql="SELECT * FROM `prodi`";
	  $q=mysqli_query($koneksi,$sql);
	  $r=mysqli_fetch_array($q);
	  if (empty($r)) {
		  echo '<option value="">Rekord prodi belum ada !</option>';
	  } else {
		  echo '<option value="">Pilih</option>';
	  }
	  do {
	  ?>
        <option value="<?php echo $r['kodeprodi'];?>"><?php echo $r['namaprodi'];?></option>
	  <?php }while($r=mysqli_fetch_array($q));?>
      </select>
    </div>
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Simpan Baru</button>
  </div>
</form>
<?php 
if(isset($_POST['submit'])) {
	$npm=$_POST['npm'];
	$namamahasiswa=$_POST['namamahasiswa'];
	$sex=$_POST['sex'];
	$tempatlahir=$_POST['tempatlahir'];
	$tanggallahir=$_POST['tanggallahir'];
	$alamat=$_POST['alamat'];
	$kodeprodi=$_POST['kodeprodi'];
	$sql="INSERT INTO `mahasiswa`(`npm`, `namamahasiswa`, `sex`, `tempatlahir`, `tanggallahir`, `alamat`, `kodeprodi`) VALUES ('".$npm."','".$namamahasiswa."','".$sex."','".$tempatlahir."','".$tanggallahir."','".$alamat."','".$kodeprodi."')";
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


