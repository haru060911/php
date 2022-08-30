<?php require_once '../selfphp/Encode.php';
session_start(); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッション情報</title>
</head>

<body>
    <form method="POST" action="session_js_idform2.php">
        <label for="id">ID:</label>
        <script>
            if ($_SESSION['id'] === '') {
                入力してください
            }
        </script>
        <input id="id" type="text" name="id" size="40" value="<?= e($_SESSION['id'] ?? '') ?>" />

        <label for="pass">PASS:</label>

        <input id="pass" type="text" name="pass" size="40" value="<?= e($_SESSION['pass'] ?? '') ?>" />

        <input type="submit" value="送信" />
    </form>
</body>

</html>