<?php //DB接続をするためのファイル
try {
    $db = new PDO('mysql:dbname=count_classpoint;host=localhost:3305', 'root', '');  //PDOによるDB接続
}   catch (PDOException $e) {
    echo "データベース接続エラー　：".$e->getMessage();
}
?>
