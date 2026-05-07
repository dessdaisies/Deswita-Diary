<?php
include "koneksi.php";

$kat  = $_POST['kategori'];
$fav  = $_POST['nama_favorit']; 

$query = "INSERT INTO tb_favorite (kategori, favorite) VALUES ('$kat', '$fav')";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    echo "<script>alert('Berhasil nambah favorit baru!'); window.location='tampil_favorite.php';</script>";
} else {
    echo "Gagal simpan: " . mysqli_error($koneksi);
}

mysqli_close($koneksi); 
?>