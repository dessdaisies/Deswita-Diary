<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['user']; ?> 🎉</h2>

<p>Berhasil login sebagai admin.</p>

<a href="logout.php">Logout</a>

</body>
</html>