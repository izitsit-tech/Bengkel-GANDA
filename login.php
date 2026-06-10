<?php
session_start();

if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "12345"){
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Bengkel Ganda Jaya</title>

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

        .login-box{
            width:350px;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,0.2);
        }

        .login-box h2{
            text-align:center;
            margin-bottom:20px;
            color:#8b5a3c;
        }

        input{
            width:100%;
            padding:12px;
            margin:10px 0;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:12px;
            border:none;
            background:#8b5a3c;
            color:white;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#6e452e;
        }

        .error{
            color:red;
            text-align:center;
            margin-bottom:10px;
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

<div class="login-box">
    <h2>Login</h2>

    <?php
    if(isset($error)){
        echo "<p class='error'>$error</p>";
    }
    ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">Masuk</button>
    </form>

    <p>Belum punya akun? <a href="register.php">Daftar</a></p>
</div>

</body>
</html>