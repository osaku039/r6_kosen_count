<?php 
require("./dbconnect.php");  //DB接続

if (isset($_POST['11'])) {    // フォームの内容をセッションで保存
    header('Location: ./Class_check/1-1_countClassPoint.php');   // check.phpへ移動
    exit(); //セッションを閉じる
}

    // /* 入力情報の不備を検知 */
    // if ($_POST['class_number'] === "1") {
    //     $error['class_number'] = "blank";
    // }
    // if ($_POST['class_year'] === "1") {
    //     $error['class_year'] = "blank";
    // }
    // elseif (!$_POST['class_year'] === [1-5]) {
    //     $error['class_year'] = "gai";
    // }

    // /* エラーがなければ次のページへ */
    // if (!isset($error)) {
    //     $_SESSION['join'] = $_POST;   // フォームの内容をセッションで保存
    //     header('Location: count_ClassPoint.php');   // check.phpへ移動
    //     exit(); //セッションを閉じる
    // }
// }
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
            <h1>クラス投票システム</h1>
            <dic class="Count">
                <table>
                    <tr>
                        <td><button type="submit" class="btn" id="11" name="11">1-1</button></td>
                        <td><button type="submit" class="btn" id="12">1-2</button></td>
                        <td><button type="submit" class="btn" id="13">1-3</button></td>
                        <td><button type="submit" class="btn" id="14">1-4</button></td>
                    </tr>
                </table> 
                <br>
                <table>
                    <tr>
                        <td><button type="submit" class="btn" id="21">2-1</button></td>
                        <td><button type="submit" class="btn" id="22">2-2</button></td>
                        <td><button type="submit" class="btn" id="23">2-3</button></td>
                        <td><button type="submit" class="btn" id="24">2-4</button></td>
                    </tr>
                </table> 
                <br>
                <table>
                    <tr>
                        <td><button type="submit" class="btn" id="3ms">3-ms</button></td>
                        <td><button type="submit" class="btn" id="3ic">3-ic</button></td>
                        <td><button type="submit" class="btn" id="3mi">3-mi</button></td>
                        <td><button type="submit" class="btn" id="3br">3-br</button></td>
                    </tr>
                </table> 
                <br>
                <table>
                    <tr>
                        <td><button type="submit" class="btn" id="4ms">4-ms</button></td>
                        <td><button type="submit" class="btn" id="4ic">4-ic</button></td>
                        <td><button type="submit" class="btn" id="4mi">4-mi</button></td>
                        <td><button type="submit" class="btn" id="4br">4-br</button></td>
                    </tr>
                </table> 
                <br>
                <table>
                    <tr>
                        <td><button type="submit" class="btn" id="5ms">5-ms</button></td>
                        <td><button type="submit" class="btn" id="5ic">5-ic</button></td>
                        <td><button type="submit" class="btn" id="5mi">5-mi</button></td>
                        <td><button type="submit" class="btn" id="5mi">5-br</button></td>
                    </tr>
                </table> 
            </div>     
        </form> 
    </div>
</body>
</html>