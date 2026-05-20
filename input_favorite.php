<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Favorit</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        .form-container{
            max-width: 500px;
            margin: 60px auto;
            background-color: #fff0f6;
            padding: 30px;
            border-radius: 15px;
            border: 2px solid #f8aeba;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .form-container h2{
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-group{
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .btn{
            text-decoration: none;
            background-color: #ff4fa3;
            color: white;
            padding: 10px 15px;
            border-radius: 10px;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        .btn:hover{
            background-color: #ff2a8a;
        }

        .btn-secondary{
            background-color: #ccc;
            color: black;
        }

        .btn-secondary:hover{
            background-color: #999;
        }

        .back-link{
            display: block;
            margin-bottom: 15px;
            text-decoration: none;
            color: #ff4fa3;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="form-container">

    <a href="dashboard.php" class="back-link">← Dashboard</a>

    <h2>Tambah Hal Favorit 💖</h2>

    <form action="simpan_favorite.php" method="post">

        <label>Kategori</label>
        <input type="text" name="kategori" placeholder="Contoh: Film" required>

        <label>Nama Favorit</label>
        <input type="text" name="nama_favorit" placeholder="Contoh: Salaar" required>

        <div class="btn-group">
            <button type="submit" class="btn"> Simpan</button>
            <a href="tampil_favorite.php" class="btn btn-secondary">📋 Daftar Favorite</a>
        </div>

    </form>

</div>

</body>
</html>