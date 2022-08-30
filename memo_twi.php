<?php
require_once '../DbManager.php';
require_once '../selfphp/Encode.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css">
    <title>Memoの表示</title>
    <style>
        body {
            padding: 0;
            background: #ffffff;
            max-width: 400px;
            margin: 20px auto;
        }

        #tweet_area {
            width: 400px;
            overflow: hidden;
            padding: 0;
            margin: 20px auto;
            border: solid 2px #eeeeee;
        }

        #user {
            width: 100px;
        }

        img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        #tweet {
            width: 400px;
            color: grey;
            font-size: 20px;
            line-height: 2px;
        }

        #tweet_button {
            font-size: 30px;
            color: #00acee;
            transform:rotate(45deg);
        }

        #twi_container {
            padding: 0;
            background: #ffffff;
            overflow: hidden;
            max-width: 400px;
            margin: 20px auto;
            font-size: 80%;
            border: solid 1px #eeeeee;
        }

        #user_name {
            width: 400px;
        }

        button {
            background: none;
            border: none;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
    </style>

</head>

<body>
    <div id="tweet_area">
        <form method="POST" action="memo_twi2.php" id="form">
            <div id="userbox">
                <img src="../php/kuma.png" alt="icon">
                <div id="user">
                    <input type="text" id="user" name="user">
                </div>
            </div>
            <div id="tweet">
                <p>つい～と</p>
                <textarea name="memo" id="memo" cols="40" rows="4"></textarea>
                <button id="tweet_button">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
    </div>

    <div id="timeline">
        <?php
        try {
            //データベースへの接続を確立
            $db = getDb();


            // DBの接続コードはパターン化されているので、使いまわしても大丈夫
            // 変にアレンジするとセキュリティの問題が起こるかも


            //select命令の準備、bookテーブルの全データを表示するSQLを作る
            //ASCが昇順DESCが降順
            $stt = $db->prepare('SELECT * FROM memo ORDER BY id ASC');
            // execute(); SQL文を実行する
            $stt->execute();

            //結果セットの内容を順に出力
            // while($row =) :連想配列を１行ずつ取り出す。
            //$stt->fetch(PDO::FETCH_ASSOC): 取得したデータを連想配列に変換する
            //ほかの項目を出力したかったら増やせばいい→<?= e($row['id'])>など
            while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
        ?>

                <div id="twi_container">
                    <div id="user_name">
                        <img src="../php/kuma.png" alt="icon">
                        <?= e($row['user']) ?>
                    </div>
                    <div id="memo">
                        <?= e($row['memo']) ?>
                    </div>
                    <div id="now">
                        <?= e($row['now']) ?>
                        <br>
                        <i class="fa-solid fa-comment"></i>
                        <i class="fa-solid fa-retweet"></i>

                        <button id="btn">
                            <i class="fa-solid fa-heart"></i>
                            <div id="number"></div>
                        </button>

                        <i class="fa-solid fa-arrow-up-from-bracket"></i>
                    </div>
                </div>
        <?php
            }
        } catch (PDOException $e) {
            // die();指定されたメッセージを出力したのち、スクリプトを強制終了する
            // (PDOException) PHP Data Object の例外
            // getMessage() 今回の場合だと、例外のメッセージを出しなさいよという意味
            die("エラーメッセージ:{$e->getMessage()}");
        }
        ?>
    </div>
    <script>
        // ボタンid btnのhtmlを取得 
        const btn = document.getElementById("btn");
        // カウントid numberを取得
        const number = document.getElementById("number");
        console.log(btn)
        console.log(number)

        // カウントの初期化
        let count = 0;
        number.textContent = count;
        btn.addEventListener("click", function(event) {
            count++; // 数値を1加算する
            number.textContent = count;
        });
    </script>
</body>

</html>