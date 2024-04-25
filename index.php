<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLUB MOTOR</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        #container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header */
        #header {
            background-color: #333;
            padding: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #header #logo-nama-container {
            display: flex;
            align-items: center;
        }

        #header #logo-motor {
            width: 200px;
        }

        #header #nama-alamat-motor-container {
            text-align: right;
            margin-left: 300px;
        }

        #header #nama-alamat-motor-container h1 {
            font-size: 50px;
            margin-bottom: 10px;
        }

        #header #nama-alamat-motor-container h4 {
            font-size: 20px;
        }

        /* Header 2 */
        #header2 {
        background-color: #ddd;
        padding: 5px 10px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-top: 20px;
        margin-bottom: 0px; /* Tambahkan margin bawah untuk memisahkan dengan sidebar */
      }

        #header2 #nama-user {
            margin-right: 20px;
        }

        #header2 a {
            color: #333;
            text-decoration: none;
            padding: 10px 15px;
            margin-left: 20px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        #header2 a:hover {
            background-color: #555;
        }

        /* Sidebar */
        #sidebar {
            background-color: #f4f4f4;
            padding: 20px;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            overflow-y: auto;
            margin-bottom: 20px; /* Tambahkan margin bawah untuk memisahkan dengan footer */
        }

        #sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        #sidebar ul li {
            margin-bottom: 10px;
        }

        #sidebar ul li a {
            color: #333;
            text-decoration: none;
            padding: 10px 15px;
            margin-left: 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
            display: block;
        }

        #sidebar ul li a:hover {
            background-color: #ccc;
        }

        /* Content Container */
        #content-container {
            margin-left: 240px;
            padding: 20px;
            padding-top: 120px;
        }

        #content-container .container {
            padding: 20px;
            border-radius: 10px;
        }

        /* Footer */
        #footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="header">
            <div id="logo-nama-container">
                <div id="nama-alamat-motor-container">
                    <div class="nama-alamat-motor">
                        <h1>CLUB MOTOR</h1>
                    </div>
                    <div class="nama-alamat-motor">
                        <h4>Jl. Merpati Putih No.121, Telp:(021)77777777</h4>
                    </div>
                </div>
            </div>
            <div id="header2">
                <a href="index.php">Home</a>
                <a href="pages/profile.php">Profile</a>
                <a href="pages/visi_misi.php">Visi dan Misi</a>
                <a href="pages/produk_kami.php">Produk Kami</a>
                <a href="pages/kontak_kami.php">Kontak Kami</a>
                <a class="logout-btn" href="pages/about_us.php">About Us</a>
            </div>

        </div>

        <div id="sidebar">
        <img id="logo-motor" src="images/coba.jpg" alt="Logo Club Motor">
            <ul>
                <li><a href="artikel.php">Artikel</a></li>
                <li><a href="event.php">Event</a></li>
                <li><a href="galery.php">Galery Foto</a></li>
                <li><a href="client.php">Klien Kami</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div id="content-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $pages_dir='pages';
                if(!empty($_GET['p'])){
                    $pages=scandir($pages_dir,0);
                    unset($pages[0],$pages[1]);
                    $p=$_GET['p'];
                    if(in_array($p.'.php',$pages)){
                        include($pages_dir.'/'.$p.'.php');
                    }else{
                        echo'Halaman Tidak Ditemukan';
                    }
                }else{
                    include($pages_dir.'/beranda.php');
                }
            ?>
        </div>
        <div id="footer"><h3>Sistem Informasi Club Motor </h3></div>
    </div>
</body>
</html>
