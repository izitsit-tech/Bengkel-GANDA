<?php
if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = $username . "|" . $password . "\n";

    file_put_contents("users.txt", $data, FILE_APPEND);

    echo "<script>
            alert('Registrasi Berhasil!');
            window.location='login.php';
          </script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Bengkel Ganda Jaya</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f4f4f4;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .container{
            width:350px;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
            margin-bottom:20px;
            color:#8b5a3c;
        }

        input{
            width:100%;
            padding:12px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:12px;
            background:#8b5a3c;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#6d442d;
        }

        p{
            text-align:center;
            margin-top:15px;
        }

        a{
            text-decoration:none;
            color:#8b5a3c;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="register">Daftar</button>
    </form>

    <p>Sudah punya akun? <a href="login.php">Login</a></p>
</div>

</body>
</html>