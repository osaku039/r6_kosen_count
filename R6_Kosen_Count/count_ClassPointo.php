<?php
$mysqli = new mysqli('localhost:3305', 'root', '', 'count_classpoint');
session_start();

$class_year = ($_SESSION['join']['class_year']); 
$class_number = ($_SESSION['join']['class_number']);


if (!empty($_POST)) {
    if (isset($_POST['star_1'])) {
    $sql = "UPDATE `4_mi` SET count = count + 1 WHERE id = 1";
    $res = $mysqli->query($sql);
    //header('Location: thank.php');   
    } else if (isset($_POST['star_2'])) {
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
        <body>
            <div class="Class_name">
                <?php echo "$class_year -$class_number "; ?>
            </div>
            <div class="vote">
                <form action="" method="post">
                    <input type="submit" name="star_1" value="☆" />
                    <input type="submit" name="star_2" value="☆☆" />
                    <input type="submit" name="star_3" value="☆☆☆" />
                    <input type="submit" name="star_4" value="☆☆☆☆" />
                    <input type="submit" name="star_5" value="☆☆☆☆☆" />
                </form>
            </div>
            
        </body>
    </head>
</html>
