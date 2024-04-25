<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <style>
        /* CSS untuk halaman Kontak Kami */

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-info {
            margin-top: 20px;
        }

        .contact-info p {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333; /* Ubah warna teks agar konsisten */
        }

        .contact-info strong {
            font-weight: bold;
        }

        .contact-info a {
            text-decoration: none;
            color: #007bff;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kontak Kami</h1>
        <div class="contact-info">
            <p><strong>Alamat:</strong> Jl. Merpati Putih No.121</p>
            <p><strong>No Telepon:</strong> (021) 7777 7777</p> <!-- Ubah format nomor telepon untuk lebih mudah dibaca -->
            <p><strong>Fax:</strong> (021) 8888 8888</p> <!-- Ubah format fax untuk lebih mudah dibaca -->
            <p><strong>Email:</strong> <a href="mailto:info@clubmotor.com">info@clubmotor.com</a></p> <!-- Tambahkan link email -->
            <!-- Tambahkan informasi kontak lainnya sesuai kebutuhan -->
        </div>
    </div>
</body>
</html>
