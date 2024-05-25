<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIM Mahasiswa V.2024</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="menu.php"><img src="https://umb.ac.id/wp-content/uploads/2024/03/logo-branding-umb-3-150x150.png" width="50px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="beranda.php" target="frmmain">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mahasiswa.php" target="frmmain">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prodi.php" target="frmmain">Prodi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pengaturan.php" target="frmmain">Pengaturan</a>
        </li>
        <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Laporan</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="dafmhsperprodi.php" target="frmmain">Daftar Mahasiswa</a></li>
    <li><a class="dropdown-item" href="daftarprodi.php" target="frmmain">Daftar Program Studi</a></li>
    <li><a class="dropdown-item" href="infomhs.php" target="frmmain">Info Mahasiswa</a></li>
  </ul>
</li>
      </ul>
      <!--form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form-->
          <a class="btn btn-success d-flex" href="logout.php">Logout</a>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  <h3>Sistem Informasi Mahasiswa</h3>
  <iframe class="container-fluid" name="frmmain" width="100%" height="500px"></iframe>
</div>

</body>
</html>


