<?php 
require("./dbconnect.php");  //DB接続
session_start();  //セッション開始

if (!empty($_POST)) {
    /* 入力情報の不備を検知 */
    if ($_POST['class_number'] === "") {
        $error['class_number'] = "blank";
    }
    if ($_POST['class_year'] === "") {
        $error['class_year'] = "blank";
    }
    elseif (!$_POST['class_year'] === [1-5]) {
        $error['class_year'] = "gai";
    }

    /* エラーがなければ次のページへ */
    if (!isset($error)) {
        $_SESSION['join'] = $_POST;   // フォームの内容をセッションで保存
        header('Location: count_ClassPoint.php');   // check.phpへ移動
        exit(); //セッションを閉じる
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>グラス杯投票システム</title>
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style_index.css">
</head>
<body>
    <div class="content"> <!--divクラスがcontent-->
        <form action="" method="POST"> <!--formアクション-->
            <h1>クラス杯投票システム</h1>
            <p>クラス名を入力してください(半角入力のみ)</p>
            <br>
            <div class="control"> <!--divクラスがcontrol-->
                <label for="class_year">学年　例:3年であれば3のみを入力してください<span class="required">必須</span></label>
                <input type="text" name="class_year">
                <?php if (!empty($error["class_year"]) && $error['class_year'] === 'blank'): ?>  //入力されていなかった場合
                    <p class="error">＊クラス名を入力してください。</p>
                <?php endif ?>
            </div>
            
            <div class="control">
                <label for="class_number">クラス　例：1組の場合、「1」　メディアであれば「mi」と入力してください<span class="required">必須</span></label>
                <input type="text" name="class_number">
                <?php if (!empty($error["class_number"]) && $error['class_number'] === 'blank'): ?> //入力されていなかった場合
                    <p class="error">＊クラス名を入力してください</p>
                <?php endif ?>
            </div>


            <div class="control"> <!--divクラスがcontrol-->
                <button type="submit" class="btn">確認する</button>  <!--ボタンを押すことによって送信-->
            </div>
        </form>
    </div>
</body>
</html>