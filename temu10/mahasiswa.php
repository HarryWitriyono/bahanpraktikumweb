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
  <h1>Form Rekord Mahasiswa</h1>
<form>
  <div class="form-group row">
    <label for="npm" class="col-4 col-form-label">Nomor Pokok Mahasiswa</label> 
    <div class="col-8">
      <input id="npm" name="npm" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="namamahasiswa" class="col-4 col-form-label">Nama mahasiswa</label> 
    <div class="col-8">
      <input id="namamahasiswa" name="namamahasiswa" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="sex" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <select id="sex" name="sex" class="custom-select">
        <option value="P">Perempuan</option>
        <option value="L">Laki-Laki</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="tempatlahir" class="col-4 col-form-label">Tempat lahir</label> 
    <div class="col-8">
      <input id="tempatlahir" name="tempatlahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggallahir" class="col-4 col-form-label">Tanggal lahir</label> 
    <div class="col-8">
      <input id="tanggallahir" name="tanggallahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="kodeprodi" class="col-4 col-form-label">Kode prodi</label> 
    <div class="col-8">
      <select id="kodeprodi" name="kodeprodi" class="custom-select">
        <option value=""></option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">💾 Simpan Mahasiswa Baru</button>
    </div>
  </div>
</form>
</div>
</body>
</html>