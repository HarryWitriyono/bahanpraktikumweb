<?php $kodedihapus=$_GET['kodeprodi'];
if (isset($_GET['kodeprodi'])) {
 $sql="delete from prodi where kodeprodi='".$kodedihapus."'";
 include_once('koneksi.db.php');
 $q=mysqli_query($kon,$sql);
 if ($q) {
	 echo "<script>alert('Rekord sudah dihapus !');</script>";
 } else {
	 echo "<script>alert('Rekord gagal dihapus !');</script>";
 }
 header('location:prodi.php');
}
?>
