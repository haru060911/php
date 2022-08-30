<!-- バックエンド処理ここから -->
<?php
// セッション変数を利用するためにセッションを開始
session_start();
// セッション変数にPOSTメソッドで受け取った値を覚えさせる
$_SESSION['id'] = $_POST['id'];
$_SESSION['pass'] = $_POST['pass'];
?>

<!-- フロント処理ここから -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッション情報</title>
</head>

<body>
    <!-- バリデーション
        $_POSTの中身を調べて空白なら、form.phpに移動させる→リダイレクト
        中身がある→そのまま次へ -->

    <?php
    if ($_SESSION['id'] === '') {
        // 前のページへリダイレクト（p.374）
        header('Location: session_idform1.php');
        // リダイレクトした後、このファイル（form2）を停止させる
        exit();
    };
    if ($_SESSION['pass'] === '') {
        header('Location: session_idform1.php');
              // リダイレクトした後、このファイル（form2）を停止させる
              exit();
    }else{
        ?>


    確認
    <!-- POSTで受け取った値を表示する -->
    <form method="POST" action="session_idform3.php">
        <!-- $SESSIONでも可 -->
        IDは
        <?php print $_POST['id']; ?>
        PASSは
        <?php print $_POST['pass']; ?>
        <input type="submit" value="OK" />
    </form>
</body>

</html>
<?php }; ?>