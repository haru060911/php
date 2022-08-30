<?php require_once'../selfphp/Encode.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memo</title>
    <style>
        #form {
            width: 100px;
            height: 300px;
        }
    </style>
</head>
<body>
    <form method="POST" action="memo2.php" id="form">
    ユーザー名
    <input type="text" id="user" name="user">
    メモ
    <textarea name="memo" id="memo" cols="30" rows="10"></textarea>
    <input type="submit" value="送信" />   
    </form>
</body>
</html>