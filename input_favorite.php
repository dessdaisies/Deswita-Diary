<!DOCTYPE html>
<html>
<head>
    <title>Tambah Favorite - Deswita's Diary</title>
    </head>
<body>

    <h2>Tambah Hal Favorit Baru</h2>
    
    <form action="simpan_favorite.php" method="post">
        <table border="0">
            <tr>
                <td>Kategori</td>
                <td>: <input type="text" name="kategori" placeholder="Contoh: Film" required></td>
            </tr>
            <tr>
                <td>Nama Favorit</td>
                <td>: <input type="text" name="favorite" placeholder="Contoh: Salaar" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Simpan Favorit! ✨</button>
                    <a href="tampil_favorite.php">Lihat Daftar</a>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>