<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I.wt.P</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>飼いたくて飼いたくて<nuv class="heart">たまらない♡</nuv><br>動物一覧</h1>
    <nav>
        <ul>
            <li><a href="toroku-input.php">登録</a></li>
            <li><a href="delete-input.php">削除</a></li>
        </ul>
    </nav>
</header>

<?php require 'db-connect.php'; ?>
<?php
$pdo = new PDO($connect, USER, PASS);
$sql = $pdo->query('SELECT * FROM Pet ');

if ($sql->rowCount() > 0) {
    echo '<table>';
    echo '<tr>';
    echo '<th>名前</th>';
    echo '<th>性別</th>';
    echo '<th>値段</th>';
    echo '<th>詳細</th>';
    echo '<th>イメージ</th>';
    echo '<th></th>';
    echo '</tr>';

    foreach ($sql as $row) {
        echo '<tr>';
        echo '<td>', $row['pet_name'], '</td>';
        echo '<td>', $row['pet_sex'], '</td>';
        echo '<td>', number_format($row['pet_cost']), '¥</td>';
        echo '<td>', $row['pet_detail'], '</td>';
        echo '<td><img src="' . $row['pet_image'] . '" alt="pet_image" style="max-width: 100px; max-height: 100px;"></td>';
        echo '<td>';
        // 更新フォームへ遷移するボタン
        echo '<form action="update-input.php" method="post">';
        echo '<input type="hidden" name="pet_id" value="' . $row['pet_id'] . '">';
        echo '<button type="submit" class="btn">更新</button>';
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {

    echo '<center>';
    echo '<p class="no_toroku">　登録待ちです...</p>';
    echo '<img src="img/cat.jpg" alt="cat" class="cat-image">';

}
?>
<script src="js/script.js"></script>
</body>
</html>
