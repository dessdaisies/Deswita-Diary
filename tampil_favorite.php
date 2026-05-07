<?php
include "koneksi.php";
// Ganti tb_favorites jadi favorite sesuai nama tabelmu
$query = mysqli_query($koneksi, "SELECT * FROM tb_favorite");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Favorit - Deswita Diary</title>
</head>
<body>

<div class="container">
    <h2>My Favorite Things List</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr bgcolor="#f2f2f2">
            <th>No</th>
            <th>Kategori</th>
            <th>Favorit Saya</th>
        </tr>

        <?php
        $no = 1; // Membuat nomor urut manual agar lebih rapi
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['kategori'] . "</td>"; // Nama kolom di DB
            echo "<td>" . $row['favorite'] . "</td>"; // Nama kolom di DB
            echo "</tr>";
        }
        mysqli_close($koneksi);
        ?>
    </table>
    
    <br>
    <a href="input_favorite.php">Tambah Lagi</a> | <a href="index.php">Ke Home</a>
</div>

</body>
</html>