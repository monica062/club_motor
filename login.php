<?php
require_once("koneksi.php");
session_start();

// Jika tombol submit ditekan
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Query ke database untuk memeriksa apakah username dan password cocok
    $result = mysqli_query($db, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    
    // Check for query execution errors
    if (!$result) {
        echo "Error: " . mysqli_error($db);
        exit;
    }

    // Fetch the row from the result set
    $row = mysqli_fetch_assoc($result);

    // Jika data ditemukan, set session dan redirect
    if(is_array($row) && !empty($row)){
        $_SESSION['username'] = $row['username'];
        // tambahkan session lainnya sesuai kebutuhan

        // Redirect ke halaman setelah login
        header("Location: index.php");
        exit(); // Penting: pastikan kode berhenti di sini
    } else {
        // Jika data tidak ditemukan, tampilkan pesan kesalahan
        $errorMessage = "Wrong username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        header {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        form .field {
            margin-bottom: 20px;
        }

        form .field label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
            color: #333;
        }

        form .field input[type="text"],
        form .field input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }

        form .field input[type="text"]:focus,
        form .field input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        form .field input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form .field input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .links {
            margin-top: 20px;
            text-align: center;
        }

        .links a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .links a:hover {
            color: #0056b3;
        }

        .message {
            color: #f00;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>Login</header>
        <form action="" method="post">
            <div class="field">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Login">
            </div>

            <div class="message">
                <?php if(isset($errorMessage)) echo $errorMessage; ?>
            </div>

            <div class="links">
                Don't have an account? <a href="register.php">Sign Up Now</a>
            </div>
        </form>
    </div>
</body>
</html>
