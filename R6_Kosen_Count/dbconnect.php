<?php
// localhostの後にポート番号指定。
try {
    $db = new PDO('mysql:dbname=count_classpoint;host=localhost:3305', 'root', '');
}   catch (PDOException $e) {
    echo "データベース接続エラー　：".$e->getMessage();
}
?>
