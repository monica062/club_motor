<?php
// Lakukan koneksi ke database
require_once("../koneksi.php");

// Query untuk mengambil data Visi dan Misi dari database
$query = "SELECT * FROM visi_misi";
$result = mysqli_query($db, $query);

// Periksa apakah query berhasil dieksekusi
if (!$result) {
    die("Query error: " . mysqli_error($db));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi dan Misi Perusahaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff; /* Ubah warna judul */
        }

        .section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        h2 {
            color: #007bff; /* Ubah warna judul */
            margin-bottom: 10px;
        }

        p, ol {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        ol {
            padding-left: 20px;
        }

        #footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Visi dan Misi Perusahaan</h1>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="text-primary">Visi:</h2>
                        <p>Menjadi komunitas motor yang solid, terdepan dalam mengedepankan persaudaraan, keselamatan berkendara, dan pelestarian lingkungan.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-primary">Misi:</h2>
                        <ol>
                            <li>Memperkuat persaudaraan dan solidaritas antar anggota CMP melalui kegiatan positif dan saling mendukung.</li>
                            <li>Meningkatkan kesadaran dan kepatuhan terhadap peraturan lalu lintas dan keselamatan berkendara bagi seluruh anggota.</li>
                            <li>Melestarikan lingkungan dengan melakukan kegiatan-kegiatan yang ramah lingkungan dan edukasi kepada anggota.</li>
                            <li>Mempromosikan citra positif komunitas motor di mata masyarakat melalui berbagai kegiatan dan aksi sosial.</li>
                            <li>Mengembangkan bakat dan minat anggota dalam bidang otomotif dan kegiatan lainnya.</li>
                        </ol>
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
