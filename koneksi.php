<?php
// Koneksi ke database
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "perpus"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data siswa dari form
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$kelas = $_POST['kelas'];

// Query untuk menambah data siswa
$sql = "INSERT INTO siswa (nama, umur, kelas) VALUES ('$nama', '$umur', '$kelas')";

if ($conn->query($sql) === TRUE) {
    echo "Data siswa berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
