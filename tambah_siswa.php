<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/sb-admin-2.min.css">
</head>
<body>
<div class="login-box mx-auto mt-5" style="width:350px;">
    <h1 class="h6 text text-center mb-5">Silahkan Masukan Data</h1>
        <form action="simpan_siswa.php" method="POST">
            <div class="mb-3">
                <label for="nis" class="form-control-label">NIS</label>
                <input type="text" class="form-control" id="username" name="nis">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-control-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-control-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-control-label">No Telpon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp">
            </div>
            <div class="mb-3">
                <label for="tanggal-lahir" class="form-control-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal-lahir" name="tanggal-lahir">
            </div>
            <div class="mb-1">
                <button class="btn btn-primary" type="sumbit" style="width: 350px">Simpan</button>            
            </div>
            <div class="mb-1">
            <button class="btn btn-success" type="reset" style="width: 350px">Batal</button>
            </div>
        </form>
</div>
</body>
</html>