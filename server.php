<h2>ユーザーエージェント</h2>
<?php
    print $_SERVER['HTTP_USER_AGENT'];
?>
<br>
<h2>IPアドレス</h2>
<p>アクセスしたのもＰＨＰサーバがあるのも同じ自分自身</p>
<?php
    print $_SERVER['REMOTE_ADDR'];
?>
<br>
<?php
    print $_ENV['Path'];
?>