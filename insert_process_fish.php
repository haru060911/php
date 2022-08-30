<?php
require_once '../DbManager.php';

try {
    // データベースへの接続を確立
    $db = getDb();

    // INSERT命令の準備
    $stt = $db->prepare('INSERT INTO fish_list(id, name, color, usefulness, price) VALUES(:id, :name, :color, :usefulness, :price)');

    // echo '<script>';
    // echo 'console.log($stt)';
    // echo '</script>';
    // touch('C:\Users\itsys\Documents');

    // $filename = 'C:\Users\itsys\Documents';
    $filename = './fish.sql';

    if (!file_exists($filename)) {
        touch($filename);
    }

    $fp = fopen($filename, 'w');
    fwrite($fp, $stt);
    fclose($fp);

    // INSERT命令にポストデータの内容をセット
    $stt->bindValue(':id', $_POST['id']);
    $stt->bindValue(':name', $_POST['name']);
    $stt->bindValue(':color', $_POST['color']);
    $stt->bindValue(':usefulness', $_POST['usefulness']);
    $stt->bindValue(':price', $_POST['price']);

    // INSERT命令を実行
    $stt->execute();

    // 処理後は入力フォームにリダイレクト
    header('Location:http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/insert_form_fish.php');
} catch (PDOException $e) {
    die("エラーメッセージ：{$e->getMessage()}");
}
