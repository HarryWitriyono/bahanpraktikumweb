<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Pendataan Mahasiswa Fakultas Teknik</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php if (!isset($_SESSION)) session_start(); 
if (empty($_SESSION['_login'])) header('location:login.php'); ?>
<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">🧑🏻‍🎓</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="beranda.php" target="frutama" title="Beranda">🏠</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prodi.php" target="frutama">🎓 Prodi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mahasiswa.php" target="frutama">👫 Mahasiswa</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">ℹ️ Informasi</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="daftarprodi.php" target="frutama"> 🎓 Daftar Program Studi</a></li>
            <li><a class="dropdown-item" href="dafmhsperprodi.php" target="frutama">🧑🏻‍🎓 Daftar Mahasiswa Per Program Studi</a></li>
            <li><a class="dropdown-item" href="profilmhs.php" target="frutama">🧑🏻‍🎓 Profil Mahasiswa</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="logout.php">🚪 Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <iframe name="frutama" src="beranda.php" width="100%" height="500px"></iframe>  
</div>


</body>
</html>


