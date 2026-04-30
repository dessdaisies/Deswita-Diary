<?php
// Cek apakah tombol "Kirim" sudah diklik
$pesan_konfirmasi = "";
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];
    $pesan_konfirmasi = "Halo $nama! Pesan kamu: '$pesan' sudah diterima di sistem PHP ya! ✨";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas PHP Deswita</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container" style="text-align: center; margin-top: 50px;">
        <h2>📝 Curhat ke PHP</h2>
        
        <form method="POST" action="">
            <input type="text" name="nama" placeholder="Nama kamu..." required style="padding: 10px; margin-bottom: 10px;"><br>
            <textarea name="pesan" placeholder="Tulis sesuatu..." required style="padding: 10px;"></textarea><br>
            <button type="submit" name="kirim" class="btn">Kirim ke PHP</button>
        </form>

        <?php if ($pesan_konfirmasi != ""): ?>
            <div style="margin-top: 20px; padding: 15px; background: #ffebf3; border-radius: 10px;">
                <p><?php echo $pesan_konfirmasi; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>