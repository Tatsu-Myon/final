<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I.wt.P - 削除</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<center>
    <h1 class="toroku_h1">今まで好きでした、、またね</h1>

<div class="box_delete">
<div class="box_delete_box">


<?php
require 'db-connect.php';

$pdo = new PDO($connect, USER, PASS);
$sql = $pdo->query('SELECT * FROM Pet');
$pets = $sql->fetchAll(PDO::FETCH_ASSOC);

if (empty($pets)) {
    echo '<p>削除対象のペットは存在しません。</p>';
    echo '<p><a href="top.php">戻る</a></p>';
} else {
    echo '<form action="delete-output.php" method="post">';
    foreach ($pets as $pet) {
        echo '<label>';
        echo '<input type="checkbox" name="pet_ids[]" value="' . $pet['pet_id'] . '">';
        echo $pet['pet_name'] . ' (' . $pet['pet_sex'] . ') - 価格: ' . $pet['pet_cost'];
        echo '<br>';
        echo '<img src="' . $pet['pet_image'] . '" alt="' . $pet['pet_name'] . '" style="max-width: 100px; max-height: 100px;">';
        echo '</label><br><br>';
    }
    echo '<p><input type="submit" class="btn-toroku-delete" value="削除"></p>';
    echo '</form>';
    echo '</div>';
 
    echo '</div>';
    echo '<div class="toroku_top_box">';
    echo '<p><a href="top.php" class="toroku_top">戻る</a></p>';
    echo '</div>';
}
?>

</body>
</html>
