<!DOCTYPE html>
<html>
<head>
    <title>Input Diary Deswita</title>
</head>
<body>
    <h2> Tulis Diary Baru </h2>
    <form action="simpan_diary.php" method="post">
        <table>
            <tr>
                <td>Judul Diary</td>
                <td>: <input type="text" name="judul" required></td>
            </tr>
            <tr>
                <td>Isi Cerita</td>
                <td>: <textarea name="isi" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan ke Database"></td>
            </tr>
        </table>
    </form>
</body>
</html>