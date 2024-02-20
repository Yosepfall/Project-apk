<?php 

$koneksi = new mysqli("localhost","root","","latihan_basdat");

if ($koneksi->connect_error) {
    die("koneksi eror: " . $koneksi->connect_error);
}

// $sql = "insert into siswa(nis,nama,alamat,no_telp,tanggal_lahir) values ('22013','Bejo','Citalang','083841415559','2021-09-11')";
// $koneksi->query($sql);
?>