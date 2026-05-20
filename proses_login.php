<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "Deswita" && $password == "161805"){

    $_SESSION['login'] = true;
    $_SESSION['user'] = $username;

    header("Location: dashboard.php");

} else {
    echo "<script>alert('Login gagal!'); window.location='login.php';</script>";
}
?>