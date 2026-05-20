<?php
include "koneksi.php";

$kat = $_POST['kategori'];
$fav = $_POST['nama_favorit'];

$query = "INSERT INTO favorit (kategori, favorit) VALUES ('$kat', '$fav')";

if(mysqli_query($koneksi, $query)){
    echo "<script>alert('Berhasil nambah favorit!'); window.location='tampil_favorite.php';</script>";
}else{
    echo "Error: " . mysqli_error($koneksi);
}
?>