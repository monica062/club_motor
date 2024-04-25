<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
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
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

/* Header Style */
header {
    text-align: center;
    margin-bottom: 20px;
}

/* Content Style */
.content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.articles {
    margin-top: 20px;
}

.article {
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
}

.article h3 {
    margin-bottom: 10px;
}

.article p {
    line-height: 1.6;
}

/* Footer Style */
footer {
    text-align: center;
    margin-top: 20px;
    padding: 10px;
    background-color: #333;
    color: #fff;
    border-radius: 8px;
}

</style>
</head>
<body>
    <div class="container">
        <!-- Content -->
        <div class="content">
            <h2>Artikel Terkait dengan Produk</h2>
            <div class="articles">
                <?php
                // Include database connection
                require_once 'koneksi.php';

                // Query to fetch articles related to products
                $query = "SELECT * FROM articles WHERE category = 'product' ORDER BY created_at DESC";
                $result = mysqli_query($db, $query); // Menggunakan variabel $db dari file koneksi.php

                // Check if there are articles available
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='article'>";
                        echo "<h3>" . $row['title'] . "</h3>";
                        echo "<p>" . $row['content'] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Tidak ada artikel terkait dengan produk saat ini.</p>";
                }
                ?>

            </div>
        </div>
        
        <!-- Footer -->
        <footer>
        <h3>Sistem Informasi CLUB MOTOR</h3>
            <!-- Tambahkan elemen footer sesuai kebutuhan -->
        </footer>
    </div>
</body>
</html>
