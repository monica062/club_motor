<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - CLUB MOTOR</title>
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

        /* Header Style */
        #header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px 5px 0 0;
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

        h3 {
            color: #ff6600; /* Ubah warna judul */
            margin-bottom: 10px;
        }

        /* Paragraph Style */
        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* List Style */
        ul {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        ul li {
            list-style-type: disc;
            margin-left: 20px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            #container {
                width: 90%;
            }
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
                        <!-- Konten Profile -->
                        <h2>Profile Perusahaan</h2>
                        <p>Selamat datang di profil perusahaan CLUB MOTOR. Kami telah berdedikasi dalam industri motor selama lebih dari 10 tahun, dengan komitmen untuk memberikan layanan terbaik kepada pelanggan kami.</p>
                        <h3>Pengalaman Perusahaan</h3>
                        <p>Kami bangga telah menjadi bagian dari industri motor selama lebih dari satu dekade. Selama waktu ini, kami telah memperoleh pengalaman yang berharga dan membangun reputasi yang kuat.</p>
                        <h3>Kelebihan Perusahaan</h3>
                        <ul>
                            <li>Kami memiliki tim profesional yang berdedikasi untuk memberikan pelayanan terbaik kepada pelanggan kami.</li>
                            <li>Kami menyediakan produk-produk berkualitas dengan harga yang bersaing di pasaran.</li>
                            <li>Kami senantiasa berinovasi dalam meningkatkan produk dan layanan kami sesuai dengan kebutuhan pelanggan.</li>
                            <li>Kami memiliki jaringan distribusi yang luas, memastikan produk kami dapat diakses dengan mudah oleh pelanggan di seluruh wilayah.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <h3 style="color: #fff;">Sistem Informasi CLUB MOTOR</h3>
        </div>
    </div>
</body>
</html>
