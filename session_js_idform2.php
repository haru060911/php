<?php
session_start();
$_SESSION['id'] = $_POST['id'];
$_SESSION['pass'] = $_POST['pass'];
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
    <?php
    if ($_SESSION['id'] === '') {
        print '入力してください';
        header('Location: session_js_idform1.php');
    }; ?>
    <?php
    if ($_SESSION['pass'] === '') {
        print '入力してください';
        header('Location: session_js_idform1.php');
    }; ?>
    確認
    <form method="POST" action="session_js_idform3.php">
        IDは
        <?php print $_SESSION['id']; ?>
        PASSは
        <?php print $_SESSION['pass']; ?>
        <input type="submit" value="OK" />
    </form>
</body>

</html>