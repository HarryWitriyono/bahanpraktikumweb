<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Program Studi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body <?php if (isset($_POST['bCetak'])) echo 'onload="print();"';?>>
<div class="container mt-3">
<h2>Profil Mahasiswa</h2>
<?php if (!isset($_POST['bCetak'])) { ?>
<form method="post" class="input-group">
    <input type="text" name="kCari" placeholder="Ketik nomor pokok mahasiswa yang dicari" class="form-control">
	<input type="submit" value="Go 🕵️" class="btn btn-info" name="bLihat">&nbsp;
	<input type="submit" value=🖨️ class="btn btn-info" name="bCetak">
 </form>
<?php } //end if !isset bCetak ?>
<?php if ((isset($_POST['bLihat'])) or (isset($_POST['bCetak']))) {
	$npm=$_POST['kCari'];
	$kon=mysqli_connect("localhost","root","","aplikasisampel1");
	$sql="select m.*,p.* from mahasiswa m inner join prodi p on m.kodeprodi=p.kodeprodi where m.npm = '".$npm."'";
	$q=mysqli_query($kon,$sql);
	$r=mysqli_fetch_array($q);
	if (empty($r)) {
		echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Tidak ditemukan!</strong> Rekord mahasiswa tidak ditemukan.
</div>';
		exit();
	} else {
	?>
<table class="table">
    <thead>
      <tr>
        <th>NPM</th>
        <th>:&nbsp;<?php echo $r['npm'];?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nama Mahasiswa</td>
        <td>:&nbsp;<?php echo $r['namamahasiswa'];?>
      </tr>
	  <tr>
        <td>Jenis Kelamin</td>
        <td>:&nbsp;<?php switch($r['sex']) {
		case 'L': echo "Laki-laki";break;
		case 'P': echo "Perempuan";break;
		}		
		;?>
      </tr>
	  <tr>
        <td>Tempat,Tgl. Lahir</td>
        <td>:&nbsp;<?php echo $r['tempatlahir'].','.$r['tanggallahir'];?>
      </tr>
	  <tr>
        <td>Alamat</td>
        <td>:&nbsp;<?php echo $r['alamat'];?>
      </tr>
	  <tr>
        <td>Program Studi</td>
        <td>:&nbsp;<?php echo $r['namaprodi'];?>
      </tr>
    </tbody>
</table>
<?php } //end if empty
} //end if isset bLihat dan bCetak?>
</div>
</body>
</html>