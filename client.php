<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klien Kami - CLUB MOTOR</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Style */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        /* Container Style */
        #container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }

        /* Header2 Style */
        #header2 {
            background-color: #444;
            color: #fff;
            padding: 10px;
            border-radius: 0 0 5px 5px;
            margin-top: -10px;
        }

        /* Content Container Style */
        #content-container {
            padding: 20px 0;
        }

        /* Footer Style */
        #footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 0 0 5px 5px;
            margin-top: 20px;
        }

        /* Heading Style */
        h2 {
            color: #333;
        }

        /* Paragraph Style */
        p {
            color: #666;
        }

        /* Daftar Klien Style */
        .client-list {
            margin-top: 20px;
        }

        .client-list h3 {
            margin-bottom: 10px;
            color: #333;
        }

        .client-list ul {
            list-style: none;
            padding: 0;
        }

        .client-list ul li {
            display: inline-block;
            margin-right: 20px;
        }

        .client-list ul li img {
            width: 100px; /* Sesuaikan ukuran logo klien */
            height: auto;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="header">
            <!-- Header sesuai kebutuhan -->
        </div>
        <div id="content-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <!-- Konten Klien Kami -->
                        <h2>Klien Kami</h2>
                        <p>Ini adalah halaman Klien Kami. Silakan tambahkan konten sesuai kebutuhan.</p>

                        <!-- Daftar Klien -->
                        <div class="client-list">
                            <h3>Daftar Klien</h3>
                            <ul>
                                <li><img src="images/1.jpg" alt="Logo Klien 1"></li>
                                <li><img src="images/2.png" alt="Logo Klien 2"></li>
                                <li><img src="images/3.jpg" alt="Logo Klien 3"></li>
                                <!-- Tambahkan logo klien lainnya di sini -->
                            </ul>
                        </div>
                        <!-- Akhir Daftar Klien -->
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <h3>Sistem Informasi CLUB MOTOR</h3>
        </div>
    </div>
</body>
</html>
