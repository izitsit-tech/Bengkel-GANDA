<?php
session_start();

if(isset($_POST['logout'])){
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>

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
            text-align:center;
        }

        h2{
            color:#8b5a3c;
            margin-bottom:20px;
        }

        p{
            margin-bottom:20px;
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
    </style>
</head>
<body>

<div class="container">
    <h2>Logout</h2>

    <p>Apakah Anda yakin ingin keluar?</p>

    <form method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
</div>

</body>
</html>