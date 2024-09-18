<?php
$mysqli = new mysqli('localhost:3305', 'root', '', 'count_classpoint');  //DBとの接続
session_start(); //セッションの開始

$class_year = ($_SESSION['join']['class_year']);  //index.phpから受け取った入力内容をセッションで受け取リ表示
$class_number = ($_SESSION['join']['class_number']);  //index.phpから受け取った入力内容をセッションで受け取リ変数に格納


if (!empty($_POST)) {  //条件式によって中身が入力されているか確認している。
    if (isset($_POST['star_1'])) {  //☆１を押された時のif文
    $sql = "UPDATE `4_mi` SET count = count + 1 WHERE id = 1";  //sql文を用いて4_miというテーブルの中にあるidの値が1のカラムに値を1+するという宣言
    $res = $mysqli->query($sql);  //queryを用いてsql文を使用
    //下記コメントアウトの原因:上記のsql文を使用する前にサイト移動しているためDBへ値が更新されない
    header('Location: thank.php'); //headerを用いてthank.phpへ移動。
    } else if (isset($_POST['star_2'])) { //同文
    $sql = "UPDATE `4_mi` SET count = count + 1 WHERE id = 2";
    $res = $mysqli->query($sql);
    header('Location: thank.php');
    } else if (isset($_POST['star_3'])) {
    $sql = "UPDATE `4_mi` SET count = count + 1 WHERE id = 3";
    $res = $mysqli->query($sql);
    header('Location: thank.php');
    } else if (isset($_POST['star_4'])) {
    $sql = "UPDATE `4_mi` SET count = count + 1 WHERE id = 4";
    $res = $mysqli->query($sql);
    header('Location: thank.php');
    } else if (isset($_POST['star_5'])) {
    $sql = "UPDATE `4_mi` SET count = count + 1 WHERE id = 5";
    $res = $mysqli->query($sql);
    header('Location: thank.php');
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <title>クラス杯投票システム</title>
        <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
        <link rel="stylesheet" href="css/style_ClassPointo.css">
    </head>

    <body>

        <div class="review">
            <p>レビュー</p>
            <div class="stars">
                <span>
                    <input id="review01" type="radio" name="review"><label for="review01">★</label>
                    <input id="review02" type="radio" name="review"><label for="review02">★</label>
                    <input id="review03" type="radio" name="review"><label for="review03">★</label>
                    <input id="review04" type="radio" name="review"><label for="review04">★</label>
                    <input id="review05" type="radio" name="review"><label for="review05">★</label>
                </span>
            </div>
        </div>

        <div class="Class_name"> <!--divのクラスネームがClass_name-->
            <?php echo "$class_year -$class_number "; ?> <!--セッションから得た値を表示-->
        </div> 
        <div class="Count">  <!--divのクラスネームがCount-->
            <form action="" method="post">  <!--formアクション-->
                <input type="submit" name="star_1" value="☆" />  <!--ボタン作成　nameがstar_1になる。-->
                <input type="submit" name="star_2" value="☆☆" />  <!--以下同文-->
                <input type="submit" name="star_3" value="☆☆☆" />
                <input type="submit" name="star_4" value="☆☆☆☆" />
                <input type="submit" name="star_5" value="☆☆☆☆☆" />
            </form>
        </div>
        
    </body>
</html>
