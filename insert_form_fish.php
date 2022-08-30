<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの登録</title>
</head>

<body>
    <form action="insert_process_fish.php" method="post">
        <div><label for="id">ID：</label><br><input type="text" id="id" name="id" size="25" maxlength="20"></div>
        <div><label for="name">魚名：</label><br><input type="text" id="name" name="name" size="35" maxlength="150"></div>
        <div><label for="color">色：</label><br><input type="text" id="color" name="color" size="6" maxlength="5"></div>
        <div><label for="usefulness">用途：</label><br><input type="text" id="usefulness" name="usefulness" size="25" maxlength="30"></div>
        <div><label for="price">価格：</label><br><input type="text" id="price" name="price" size="15" maxlength="10">円</div>
        <div><input type="submit" value="登録"></div>
    </form>
</body>

</html>