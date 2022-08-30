<?php

require_once '../DbManager.php';

try {
    // DBに接続する
    $db = getDb();

    // $sttという変数名を定義（別にどんな名前でもいい、Statmentの略？)
    $stt = $db->prepare('INSERT INTO book(isbn, title, price, publish, published) VALUES(:isbn, :title, :price, :publish, :published)');

    // 穴あきのSQL文にフォームの文字をいれて完成させていく
    $stt->bindValue(':isbn', $_POST['isbn']);
    $stt->bindValue(':title', $_POST['title']);
    $stt->bindValue(':price', $_POST['price']);
    $stt->bindValue(':publish', $_POST['publish']);
    $stt->bindValue(':published', $_POST['published']);

    // SQLの実行
    $stt->execute();

    // 
    header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/insert_form.php');
} catch (PDOException $e) {
    die("エラーメッセージ：{$e->getMessage()}");
}
