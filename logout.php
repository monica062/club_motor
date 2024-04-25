<?php
// Memulai sesi
session_start();

// Menghapus semua variabel sesi
session_unset();

// Menghancurkan sesi
session_destroy();

// Mengarahkan pengguna kembali ke halaman login
header("Location: login.php");
exit(); // Pastikan kode berhenti di sini setelah pengalihan
?>
