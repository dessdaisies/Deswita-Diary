<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tb_favorites");
?>
<div class="container">
    <h2>🌟 My Favorite Things List 🌟</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Favorit Saya</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_row($query)) {
            echo "<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                  </tr>";
        }
        mysqli_close($koneksi);
        ?>
    </table>
    <br>
    <a href="input_favorite.php">Tambah Lagi</a> | <a href="deswita.html">Ke Home</a>
</div>