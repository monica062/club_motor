<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kami - CLUB MOTOR</title>
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
        #header, #header2 {
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        /* Header2 Style */
        #header2 {
            margin-top: -10px;
        }

        /* Nama User Style */
        #nama-user {
            float: left;
            margin-right: 10px;
        }

        /* Logout Button Style */
        #logout-btn {
            float: right;
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #f00;
            border-radius: 3px;
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
            <?php if(isset($_SESSION['username'])): ?>
                <div id="nama-user">Hai, <?php echo $_SESSION['username']; ?>!</div>
                <a id="logout-btn" href="?logout=1">Logout</a>
            <?php endif; ?>
        </div>
        <div id="content-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <!-- Konten Produk Kami -->
                        <h2>Produk Kami</h2>
                        <p>Ini adalah halaman Produk Kami. Silakan tambahkan konten sesuai kebutuhan.</p>
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
