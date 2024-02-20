<?php
include "config_db.php";

$sql = "insert into siswa(nis,nama,alamat,no_telp,tanggal_lahir) values ('".$_POST['nis']."','".$_POST['nama']."','".$_POST['alamat']."','".$_POST['no_telp']."','".$_POST['tanggal-lahir']."')";
$koneksi->query($sql);
if ($koneksi->connect_error) {
    die("koneksi eror: " . $koneksi->connect_error);
}else{
    echo ("data berhasil ditambahkan");
}
?>