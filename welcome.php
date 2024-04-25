<?php
session_start(); // Mulai sesi untuk penggunaan fitur sesi

// Lakukan pengecekan jika tombol logout diklik
if(isset($_GET['logout'])) {
    // Hapus semua data sesi
    session_unset();
    session_destroy();
    // Redirect ke halaman login
    header("Location: login.php");
    exit(); // Pastikan kode berhenti di sini setelah redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Welcome Page</title>
    <style>
        body {
            background-image: url('background.jpg'); /* Ganti dengan URL atau path ke gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            color: #ffffff;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7); /* Ubah opasitas sesuai kebutuhan */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Tambahkan shadow */
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px; /* Tambahkan margin bawah */
        }
        p {
            margin-bottom: 30px; /* Tambahkan margin bawah */
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Website Club Motor</h1>
        <p>Please login to access our services.</p>
        <a class="btn" href="login.php">Login</a>
    </div>
</body>
</html>
