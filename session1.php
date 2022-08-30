<?php 
    require_once '../selfphp/Encode.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>セッション情報</title>
</head>
<body>
    <form action="session2.php" method="post">
        <label for="email">メールアドレス</label>
        <input id="email" type="text" name="email" size="40">
        <input type="submit" value="送信">
    </form>
</body>
</html>

