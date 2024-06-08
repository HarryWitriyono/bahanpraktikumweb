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
<div class="container">
  <h1>Form Rekord Prodi</h1>
<form>
  <div class="form-group row">
    <label for="kodeprodi" class="col-4 col-form-label">Kode prodi</label> 
    <div class="col-8">
      <input id="kodeprodi" name="kodeprodi" placeholder="📄" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="namaprodi" class="col-4 col-form-label">Nama prodi</label> 
    <div class="col-8">
      <input id="namaprodi" name="namaprodi" placeholder="🎓" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan Prodi Baru</button>
    </div>
  </div>
</form>
</div>
</body>
</html>