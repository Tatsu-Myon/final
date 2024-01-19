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
        <?php
        require 'db-connect.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['pet_ids']) && is_array($_POST['pet_ids'])) {
                $pdo = new PDO($connect, USER, PASS);

                foreach ($_POST['pet_ids'] as $pet_id) {
                    $stmt = $pdo->prepare('DELETE FROM Pet WHERE pet_id = ?');
                    $stmt->execute([$pet_id]);
                }

                echo '<p><h1 class="toroku_h1">選択されたペット情報が削除されました。</h1></p>';
                echo '<br>';
                echo '<div class="toroku_top_box"><a href="top.php" class="toroku_top">トップへ戻る</a></div>';
            } else {
                echo '<p><h1 class="toroku_h1">バイバイする子選択した？</h1></p>';
                echo '<br>';
                echo '<div class="toroku_top_box"><a href="delete-input.php" class="toroku_top">戻る</a></div>';
            }
        } else {
            echo '<p><h1 class="toroku_h1">無効なアクセスです。。</h1></p>';
            echo '<br>';
            echo '<div class="toroku_top_box"><a href="top.php" class="toroku_top">トップへ戻る</a></div>';
        }
        ?>


</body>

</html>