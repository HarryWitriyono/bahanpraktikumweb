<?php 
if (isset($_GET['npm'])) {
	$npmdihapus=$_GET['npm'];
	$sql="delete from mahasiswa where npm='".$npmdihapus."'";
	include_once('koneksi.db.php');
	$q=mysqli_query($kon,$sql);
}
header('location:mahasiswa.php');
?>
