<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event - CLUB MOTOR</title>
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
            color: #333;
        }

        /* Container Style */
        #container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header Style */
        #header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Content Container Style */
        #content-container {
            margin-top: 20px;
        }

        .container {
            display: flex;
            justify-content: center;
        }

        .col-md-10 {
            flex: 0 0 83.333333%;
            max-width: 83.333333%;
        }

        /* Content Style */
        h2 {
            margin-bottom: 10px;
            color: #333;
        }

        p {
            margin-bottom: 15px;
            color: #666;
        }

        ul {
            margin-bottom: 15px;
        }

        li {
            list-style-type: disc;
            margin-left: 20px;
        }

        /* Footer Style */
        #footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
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
                        <!-- Konten Event -->
                        <h2>Event</h2>
                        <p>Ini adalah halaman Event. Silakan tambahkan konten sesuai kebutuhan.</p>
                        <p>Contoh kegiatan yang bisa ditampilkan di sini:</p>
                        <ul>
                            <li>Pertemuan rutin anggota klub motor</li>
                            <li>Penggalangan dana untuk amal</li>
                            <li>Touring bersama</li>
                            <!-- Tambahkan kegiatan lainnya di sini -->
                        </ul>
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

