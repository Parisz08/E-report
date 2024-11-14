<?php
// Sertakan file yang diperlukan
include(__DIR__ . '/auth.php');
include(__DIR__ . '/database.php');

// Cek apakah pengguna adalah admin
if (!isAdmin()) {
    // Jika bukan admin, redirect atau tampilkan pesan
    header("Location: index.php");
    exit();
}

// Logika untuk logout
session_start();
session_destroy();
header("Location: login.php");
exit();
?>