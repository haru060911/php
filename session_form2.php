<?php
session_start();
$_SESSION['id'] = $_POST['id'];
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
    確認
    <form method="POST" action="session_form3.php">
        IDは
        <?php print $_SESSION['id']; ?>
        <input type="submit" value="OK" />
    </form>
</body>
</html>