
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I.wt.P</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
require 'db-connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = new PDO($connect, USER, PASS);

    $pet_id = $_POST['pet_id'];
    $pet_name = $_POST['pet_name'];
    $pet_sex = $_POST['pet_sex'];
    $pet_cost = $_POST['pet_cost'];
    $pet_detail = $_POST['pet_detail'];

    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["pet_image"]["name"]);

    if ($_FILES["pet_image"]["size"] > 0) {
        move_uploaded_file($_FILES["pet_image"]["tmp_name"], $target_file);
    } else {
        $stmt = $pdo->prepare('SELECT pet_image FROM Pet WHERE pet_id = ?');
        $stmt->execute([$pet_id]);
        $old_image_path = $stmt->fetchColumn();

        $target_file = $old_image_path;
    }

    $sql = $pdo->prepare('UPDATE Pet SET pet_name=?, pet_sex=?, pet_cost=?, pet_detail=?, pet_image=? WHERE pet_id=?');
    $sql->execute([$pet_name, $pet_sex, $pet_cost, $pet_detail, $target_file, $pet_id]);
echo '<center>';
    echo '<p><h1 class="toroku_h1">ペット情報が更新されました。</h1></p>';
    echo'<br>';
    echo '<div class="toroku_top_box"><a href="top.php" class="toroku_top">トップへ戻る</a></div>';
} else {
    echo '<p><h1 class="toroku_h1">無効なアクセスです</h1></p>';
}
?>



<script src="js/script.js"></script>
</body>
</html>
