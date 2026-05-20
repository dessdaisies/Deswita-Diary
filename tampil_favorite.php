<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM favorit");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Favorit</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        .container{
            max-width: 700px;
            margin: 60px auto;
            background-color: #fff0f6;
            padding: 25px;
            border-radius: 15px;
            border: 2px solid #f8aeba;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .container h2{
            text-align: center;
            margin-bottom: 20px;
        }

        .back-link{
            display: inline-block;
            margin-bottom: 15px;
            text-decoration: none;
            color: #ff4fa3;
            font-weight: bold;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th{
            background-color: #ffb6d9;
            padding: 10px;
        }

        td{
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even){
            background-color: #ffe4f0;
        }

        tr:hover{
            background-color: #ffd1e6;
        }

        .btn-group{
            margin-top: 15px;
            display: flex;
            justify-content: space-between;
        }

        .btn{
            text-decoration: none;
            background-color: #ff4fa3;
            color: white;
            padding: 8px 15px;
            border-radius: 10px;
            font-weight: bold;
        }

        .btn:hover{
            background-color: #ff2a8a;
        }
    </style>
</head>

<body>

<div class="container">

    <a href="dashboard.php" class="back-link">← Dashboard</a>

    <h2>My Favorite Things 💖</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Favorit</th>
        </tr>

        <?php
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['kategori']."</td>";
            echo "<td>".$row['favorit']."</td>";
            echo "</tr>";
        }
        ?>

    </table>

    <div class="btn-group">
        <a href="input_favorite.php" class="btn">➕ Tambah Lagi</a>
        <a href="deswita.html" class="btn">🏠 Home</a>
    </div>

</div>

</body>
</html>