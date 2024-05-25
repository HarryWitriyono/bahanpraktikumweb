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
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Prodi</th>
        <th>Nama Prodi</th>
        <th>Aksi Rekord</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	$kCari=$_POST['kCari'];
	$sqlcari="select * from prodi where kodeprodi like '%".$kCari."%' or namaprodi like '%".$kCari."%'";
	$qcari=mysqli_query($kon,$sqlcari);
	$rcari=mysqli_fetch_array($qcari);
	if (empty($rcari)) {
		echo '
		<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Tidak ada rekordnya!</strong> Tidak ada rekord yang sesuai dengan kriteria pencariannya !.
</div>
		';
		exit();
	}
	do {	
	?>
      <tr>
        <td><?php echo $rcari['kodeprodi'];?></td>
        <td><?php echo $rcari['namaprodi'];?></td>
        <td><a href="koreksiprodi.php?kodeprodi=<?php echo $rcari['kodeprodi'];?>" target="frutama" class="btn btn-primary">🖊️</a>
		<a href="hapusprodi.php?kodeprodi=<?php echo $rcari['kodeprodi'];?>" target="frutama" class="btn btn-danger" onclick="return confirm('Apakah akan dihapus ?')">🗑️</a></td>
      </tr>
	<?php
	} while($rcari=mysqli_fetch_array($qcari));
    ?>	
    </tbody>
 </table>
</div>

</body>
</html>
