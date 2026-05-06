<?php
include "koneksi.php";

$kat  = $_POST['kategori'];
$fav  = $_POST['nama_favorit'];

// SQL untuk simpan ke tabel favorites
$query = "INSERT INTO tb_favorites (kategori, nama_favorit) VALUES ('$kat', '$fav')";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    echo "<script>alert('Berhasil nambah favorit baru!'); window.location='tampil_favorite.php';</script>";
} else {
    echo "Gagal simpan: " . mysqli_error($koneksi);
}
mysqli_close($koneksi); 
?>