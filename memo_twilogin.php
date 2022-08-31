<?php require_once '../selfphp/Encode.php';
session_start(); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css">
    <title>ログイン</title>
    <style>
        .fa-brands {
            color: #00acee;
            font-size: 50px;
        }
        #login_p {
            width: 400px;
            overflow: hidden;
            padding: 0;
            margin: 20px auto;
            font-size: 30px;
            text-align: center;
        }

        body {
            width: 400px;
            overflow: hidden;
            padding: 0;
            margin: 20px auto;
            text-align: center;
        }

        #login_form {
            border: solid 2px #eeeeee;
            width: 250px;
            height: 250px;
            border-radius: 5%;
            margin: 20px auto;
        }
    </style>
</head>

<body>
    <i class="fa-brands fa-twitter"></i>
    <p id="login_p"><b>Twitterにログイン</b></p>
    <form method="POST" action="memo_twi.php" id="login_form">
        <div id="id_area">
            <label for="id">ID:</label><br>
            <input id="id" type="text" name="id" size="20" value="<?= e($_SESSION['id'] ?? '') ?>" />
        </div>
        <div id="pass_area">
            <label for="id">パスワード:</label><br>
            <input id="pass" type="text" name="pass" size="20" value="<?= e($_SESSION['pass'] ?? '') ?>" />
        </div>
        <input type="submit" value="ログイン" />
    </form>
</body>

</html>