<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body>
<div class="container-fluid mt-3">
  <p>Selamat datang di Aplikasi demo ini. Aplikasi ini merupakan pembelajaran tentang pembuatan aplikasi database relational sederhana yang menginformasikan Manajemen Mahasiswa dan Program Studi.</p>
  <div class="row">
   <div class="col">
    <div class="card">
		<div class="card-header">Statistik Jumlah Mahasiswa</div>
		<div class="card-body">
		<div id="myPlot" style="width:100%;max-width:700px"></div>
<?php include('koneksi.db.php');
$sql="select m.kodeprodi,count(m.npm) as jumlahmhs from mahasiswa m inner join prodi p on m.kodeprodi=p.kodeprodi group by m.kodeprodi";
$q=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($q);
$namaprodi=array();$jmhs=array();
do { 
 $sql1="select namaprodi from prodi where kodeprodi='".$r['kodeprodi']."'";
 $q1=mysqli_query($koneksi,$sql1);
 $r1=mysqli_fetch_assoc($q1);
 $namaprodi[] = $r1['namaprodi'];
 $jmhs[]=$r['jumlahmhs']; 
 } while($r=mysqli_fetch_assoc($q));
 ?>
<script>

const xArray = <?php echo json_encode($namaprodi); ?>;
const yArray = <?php echo json_encode($jmhs); ?>;

const layout = {title:"Jumlah Mahasiswa Per Program Studi"};

const data = [{labels:xArray, values:yArray, type:"pie"}];

Plotly.newPlot("myPlot", data, layout);
</script>

		
		</div>
		<div class="card-footer">Footer</div>
	</div>
   </div>
   <div class="col">
    <div class="card">
		<div class="card-header">Header</div>
		<div class="card-body">Content</div>
		<div class="card-footer">Footer</div>
	</div>
   </div>
   <div class="col">
    <div class="card">
		<div class="card-header">Header</div>
		<div class="card-body">Content</div>
		<div class="card-footer">Footer</div>
	</div>
   </div>
  </div>
</div>

</body>
</html>


