<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto - CLUB MOTOR</title>
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
            margin: 0;
            padding: 0;
        }

        /* Container Style */
        #container {
            max-width: 1200px;
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

        /* Gallery Style */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 20px;
            margin-top: 20px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
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
                <div class="col-md-10">
                    <!-- Konten Galeri Foto -->
                    <h2>Galeri Foto</h2>
                    <div class="gallery">
                        <img src="images/slide1.jpg" alt="Foto 1">
                        <img src="images/slide2.jpg" alt="Foto 2">
                        <img src="images/slide3.jpg" alt="Foto 3">
                        <!-- Tambahkan gambar-gambar lainnya di sini -->
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
