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
    <form method="POST" action="session_idform2.php">

        <label for="id">ID:</label>
        <?php if ($_SESSION['id'] === '') {
                    print '入力してください';
                }; ?>
        <input id="id" type="text" name="id" size="40" value="<?= htmlspecialchars($_SESSION['id'] ?? '') ?>" />

        <label for="pass">PASS:</label>
        <?php if ($_SESSION['pass'] === '') {
                    print '入力してください';
                }; ?>
        <input id="pass" type="text" name="pass" size="40" value="<?= htmlspecialchars($_SESSION['pass'] ?? '') ?>" />

        <input type="submit" value="送信" />
    </form>
</body>

</html>