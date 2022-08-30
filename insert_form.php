<?php 
session_start();
$token = uniqid(bin2hex(random_bytes(13)),true);
$_SESSION['token'] = $token; ?>
<input type="hidden" name="token" value="<?php print $token; ?>"/>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの登録</title>
</head>
<body>
    <form method="post" action="insert_process.php">
        <div>
            <label for="isbn">ISBNコード：</label><br/>
            <input id="isbn" type="text" name="isbn" size="25" maxlength="20" />
        </div>
        <div>
            <label for="title">書名：</label><br/>
            <input id="title" type="text" name="title" size="35" maxlength="150" />
        </div>
        <div>
            <label for="price">価格：</label><br/>
            <input id="price" type="text" name="price" size="6" maxlength="205" />円
        </div>
        <div>
            <label for="publish">出版社：</label><br/>
            <input id="publish" type="text" name="publish" size="25" maxlength="30" />
        </div>
        <div>
            <label for="published">刊行日：</label><br/>
            <input id="published" type="text" name="published" size="15" maxlength="10" />
        </div>
        <div>
            <input type="submit" value="登録" />
        </div>
    </form>
</body>
</html>