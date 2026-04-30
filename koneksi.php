<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_diary_deswita";

$koneksi = mysqli_connect("localhost:3307", $user, $pass);

mysqli_select_db($koneksi, $db);

if (!$koneksi) {
    die("koneksi ke database gagal: " . mysqli_connect_error());
}
?>