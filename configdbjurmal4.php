<?php
// 01. Melakukan koneksi ke MySQL dan memilih database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "siakad_05"; 

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi ke MySQL gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi ke MySQL berhasil!";
}
?>