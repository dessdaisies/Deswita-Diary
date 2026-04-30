<?php

$host = "localhost";
$user = "root";
$pass = "";

$koneksi = mysqli_connect($host, $user, $pass);

mysqli_select_db($koneksi, "db_diary_deswita");

// 3. Mengambil data dari tabel diary
$sql    = "SELECT id, judul, isi_cerita FROM tb_diary";
$query  = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Pemrograman Web - Diary Deswita</title>
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #fce4ec; color: #333; }
        .container { width: 70%; margin: 50px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #ad1457; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid #f06292; }
        th { background-color: #f06292; color: white; padding: 12px; }
        td { padding: 10px; text-align: center; }
        tr:nth-child(even) { background-color: #f8bbd0; }
        .footer { margin-top: 20px; font-size: 12px; text-align: center; color: #888; }
    </style>
</head>
<body>

<div class="container">
    <h2>🎀 Daftar Cerita Diary Deswita 🎀</h2>
    <p>Menampilkan data dengan fungsi <b>mysqli_fetch_row()</b></p>

    <table>
        <tr>
            <th>No</th>
            <th>Judul Diary</th>
            <th>Isi Curhatan</th>
        </tr>

        <?php
        // 4. Mengambil hasil dengan mysqli_fetch_row
        // row[0] adalah ID, row[1] adalah Judul, row[2] adalah Isi
        while ($row = mysqli_fetch_row($query)) {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <div class="footer">
        Tugas Web - Menggunakan PHP & MySQL (Port: 3307)
    </div>
</div>

</body>
</html>