<?php setcookie('id', $_POST['id'] , time() + (10)); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキー情報</title>
</head>
<body>
    確認
    <form method="POST" action="cookie_form3.php">
        IDは
        <?php print $_POST['id']; ?>
        <input type="submit" value="OK" />
    </form>
</body>
</html>