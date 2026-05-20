<?php
include "koneksi.php";

$kat  = $_POST['kategori'];
$fav  = $_POST['nama_favorite']; 

$query = "INSERT INTO favorite (kategori, favorite) VALUES ('$kat', '$fav')";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    echo "<script>alert('Berhasil tambah favorite baru!'); window.location='tampil_favorite.php';</script>";
} else {
    echo "Gagal simpan: " . mysqli_error($koneksi);
}

mysqli_close($koneksi); 
?>