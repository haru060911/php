<?php
require_once '../DbManager.php';
require_once '../selfphp/Encode.php';


try {
  // データベースへの接続を確立
  $db = getDb();

  // INSERT命令の準備 memoのカラムに値を入れる意味
  // $sttという変数名を定義（別にどんな名前でもいい、Statmentの略？）
  // insert into table名（列名） values(列名)
  // :列名 プレースホルダー 名前は自由
  // プレースホルダーはそのあとのbindValue()のところで当てはめる
  $stt = $db->prepare('INSERT INTO memo(memo,now,user) VALUES(:memo,:now,:user)');
  // memoのカラムにPOSTで取得したテキストを入れる
  $stt->bindValue(':memo', $_POST['memo']);
  $stt->bindValue(':now', $_POST['now']);
  $stt->bindValue(':user', $_POST['user']);
  // INSERT命令を実行
  $stt->execute();

    // 処理後は入力フォームにリダイレクト
  header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/memo3.php');
} catch(PDOException $e) {
      // die();指定されたメッセージを出力したのち、スクリプトを強制終了する
    // (PDOException) PHP Data Object の例外
    // getMessage() 今回の場合だと、例外のメッセージを出しなさいよという意味
  die("エラーメッセージ：{$e->getMessage()}");
}
?>