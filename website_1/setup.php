<?php
// Koneksi TANPA nama database dulu
$conn = mysqli_connect('localhost', 'root', '');

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Buat database
$sql = "CREATE DATABASE IF NOT EXISTS data_base";

if (mysqli_query($conn, $sql)) {
    echo "Database berhasil dibuat!";
} else {
    echo "Gagal: " . mysqli_error($conn);
}

mysqli_close($conn);
?>