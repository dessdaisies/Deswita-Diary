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
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<header>
    <h1>Dashboard</h1>
</header>

<main>
    <section class="message-box">
        <h2>Welcome, <?php echo $_SESSION['user']; ?> </h2>
        <p>Berhasil login sebagai admin.</p>

        <div class="dashboard-menu">
            <a href="input_favorite.php" class="btn">➕ Tambah Favorit</a>
            <a href="tampil_favorite.php" class="btn">📋 Lihat Favorit</a>
            <a href="logout.php" class="btn logout">🚪 Logout</a>
        </div>
    </section>
</main>

</body>
</html>