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
    <br>
<!-- 保存しているセッション変数の呼び出し -->
<!-- $POSTは前のページでフォームに入力した内容を覚えるため今回は使えない。 -->

    ID:
    <?php print $_SESSION['id']; ?>
    <br>
    PASS:
    <?php print $_SESSION['pass']; ?>
    <br>
    を保存しました。
</body>

</html>