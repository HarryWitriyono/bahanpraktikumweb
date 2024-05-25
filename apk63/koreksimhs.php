<?php 
include_once('koneksi.db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
 <div class="row">
  <div class="col-sm-4">
  <h2>Koreksi Rekord Mahasiswa</h2>
  </div>
  <div class="col-sm-8">
   <form method="post" action="hasilcarimhs.php" target="frmhasilcari" class="input-group">
    <input type="text" name="kCari" placeholder="Ketik nomor pokok mahasiswa yang dicari" class="form-control">
	<input type="submit" value="Go" class="btn btn-info">
   </form>
  </div>  
 </div> 
 <?php
 if (isset($_GET['npm'])) {
	 $npmdikoreksi=$_GET['npm'];
	 $sql="select * from mahasiswa where npm='".$npmdikoreksi."'";
	 $q=mysqli_query($kon,$sql);
	 $r=mysqli_fetch_array($q);
 ?>
 <form action="" method="post">
  <div class="row">
   <div class="col-sm-5">
    <div class="mb-3 mt-3">
      <label for="npm">NPM :</label>
      <input type="text" class="form-control" id="npm" placeholder="Ketik kode npm-nya" name="npm" value="<?php echo $r['npm'];?>">
    </div>
    <div class="mb-3">
      <label for="namamahasiswa">Nama Mahasiswa:</label>
      <input type="text" class="form-control" id="namamahasiswa" placeholder="Enter nama mahasiswanya" name="namamahasiswa" value="<?php echo $r['namamahasiswa'];?>">
    </div>
	<div class="mb-3">
	 <label for="sex" class="form-label">Jenis Kelamin:</label>
     <select class="form-select" id="sex" name="sex">
      <option value="P" <?php if($r['sex']=='P') echo "selected";?>>Perempuan</option>
      <option value="L" <?php if($r['sex']=='L') echo "selected";?>>Laki-laki</option>
    </select>
    </div>
	<div class="input-group">
	<div class="mb-3">
      <label for="tempatlahir">Tempat Lahir:</label>
      <input type="text" class="form-control" id="tempatlahir" placeholder="Enter tempat lahir mahasiswanya" name="tempatlahir" value="<?php echo $r['tempatlahir'];?>">
    </div>
	<div class="mb-3">
      <label for="tanggallahir">Tanggal Lahir:</label>
      <input type="date" class="form-control" id="tanggallahir" placeholder="Enter tempat lahir mahasiswanya" name="tanggallahir" value="<?php echo $r['tanggallahir'];?>">
    </div>
	</div>
   </div>
   <div class="col-sm-6">   
	
	<div class="mb-3">
      <label for="alamat">Alamat mahasiswa:</label>
      <textarea title="Enter alamat tinggal mahasiswanya" name="alamat" class="form-control"><?php echo $r['alamat'];?>
	  </textarea>
    </div>
	<div class="mb-3">
	 <label for="kodeprodi" class="form-label">Kode Prodi:</label>
     <select class="form-select" id="kodeprodi" name="kodeprodi">
	 <?php 
	 $sql1="select * from prodi";
	 $q1=mysqli_query($kon,$sql1);
	 $r1=mysqli_fetch_array($q1);
	 do {
	 ?>
      <option value="<?php echo $r1['kodeprodi'];?>" <?php if ($r1['kodeprodi']==$r['kodeprodi']) echo "selected";?>><?php echo $r1['namaprodi'];?></option>
	 <?php 
	 } while($r1=mysqli_fetch_array($q1));
 }
	 ?>
    </select>
    </div>
    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
   </div>
  </div>
  </form>
  <?php 
  if (isset($_POST['bSimpan'])) {
	  $npm=$_POST['npm'];
	  $namamahasiswa=$_POST['namamahasiswa'];
	  $sex=$_POST['sex'];
	  $tempatlahir=$_POST['tempatlahir'];
	  $tanggallahir=$_POST['tanggallahir'];
	  $alamat=$_POST['alamat'];
	  $kodeprodi=$_POST['kodeprodi'];
	  
	  $sql="update mahasiswa set namamahasiswa='".$namamahasiswa."', sex='".$sex."',tempatlahir='".$tempatlahir."',tanggallahir='".$tanggallahir."',alamat='".$alamat."',kodeprodi='".$kodeprodi."' where npm='".$npm."'";
	  $q=mysqli_query($kon,$sql);
	  header("location:mahasiswa.php");
  }
  ?>
<div class="row">  
<iframe name="frmhasilcari" class="col-sm-12"></iframe>  
</div>
</div>
</body>
</html>
