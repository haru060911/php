<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッション情報</title>
</head>

<body>
    セッション情報
    ID:
    <?php print $_SESSION['id']; ?>
    PASS:
    <?php print $_SESSION['pass']; ?>
    を保存しました。
</body>

</html>