<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Register</title>
    <style>
        body {
            background-image: url('background.jpg'); /* Ganti dengan URL atau path ke gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 30px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        header {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .field {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .message {
            background-color: #f44336;
            color: #ffffff;
            padding: 10px 0;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .links {
            margin-top: 20px;
        }

        .links a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .links a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php 
            include("koneksi.php");
            if(isset($_POST['submit'])){
                $username = mysqli_real_escape_string($db, $_POST['username$username']);
                $alamat = mysqli_real_escape_string($db, $_POST['alamat']);
                $password = mysqli_real_escape_string($db, $_POST['password']);

                //verifying the unique 
                $verify_query = mysqli_query($db,"SELECT * FROM admin WHERE username='$username'");

                if(mysqli_num_rows($verify_query) != 0 ){
                    echo "<div class='message'>This username is used, Try another one please!</div>";
                } else {
                    mysqli_query($db,"INSERT INTO admin(username,alamat,password) VALUES('$username','$alamat','$password')") or die("Error Occurred");


                    echo "<div class='message'>Registration successful!</div>";
                }
            }
            ?>
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field">
                    <label for="username$username">username</label>
                    <input type="text" name="username$username" id="username$username" autocomplete="off" required>
                </div>

                <div class="field">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" autocomplete="off" required>
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register">
                </div>

                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
