<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Program Studi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body onload="print()">
<div class="container mt-3">
<h2>Daftar Mahasiswa Per Program Studi</h2>
<?php
 $kon=mysqli_connect("localhost","root","","aplikasisampel1");
 $sql="select * from prodi";
 $q=mysqli_query($kon,$sql);
 $r=mysqli_fetch_array($q);
 do {
?>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode Program Studi</th>
        <th>Nama Program Studi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $r['kodeprodi'];?></td>
        <td><?php echo $r['namaprodi'];?></td>
      </tr>
    </tbody>
</table>
<?php
		 $sqlm="select * from mahasiswa where kodeprodi='".$r['kodeprodi']."'";
		 $qm=mysqli_query($kon,$sqlm);
		 $rm=mysqli_fetch_array($qm);
		 if (!empty($rm)) {
		?>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Jenis Kelamin</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
      </tr>
    </thead>
    <tbody>
<?php
	do {
?>	
      <tr>
        <td><?php echo $rm['npm'];?></td>
        <td><?php echo $rm['namamahasiswa'];?></td>
        <td><?php echo $rm['sex'];?></td>
		<td><?php echo $rm['tempatlahir'];?></td>
		<td><?php echo $rm['tanggallahir'];?></td>
		<td><?php echo $rm['alamat'];?></td>
      </tr>
	<?php } while($rm=mysqli_fetch_array($qm));
?>
    </tbody>
</table>
<hr class="divider py-1 bg-success">
<?php } //end if !empty$rm
 } while ($r=mysqli_fetch_array($q));
?>

</div>
</body>
</html>