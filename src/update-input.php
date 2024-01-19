<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I.wt.P - 更新</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<center>
    <h1 class="toroku_h1">ペット情報の更新</h1>
</center>

<?php
require 'db-connect.php';

if (isset($_POST['pet_id'])) {
    $pdo = new PDO($connect, USER, PASS);
    $pet_id = $_POST['pet_id'];

    $stmt = $pdo->prepare('SELECT * FROM Pet WHERE pet_id = ?');
    $stmt->execute([$pet_id]);
    $pet = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($pet) {
        ?>
        <div class="box_update">
        <div class="magin">
        <form action="update-output.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="pet_id" value="<?php echo $pet['pet_id']; ?>" required>
            <p><input type="text" class="a" name="pet_name" placeholder="名前" value="<?php echo $pet['pet_name']; ?>" required /></p>
            <input type="radio" class="a" name="pet_sex" value="♂" <?php echo ($pet['pet_sex'] == '♂') ? 'checked' : ''; ?>>♂
            <input type="radio" class="a" name="pet_sex" value="♀" <?php echo ($pet['pet_sex'] == '♀') ? 'checked' : ''; ?>>♀
            <input type="radio" class="a" name="pet_sex" value="?" <?php echo ($pet['pet_sex'] == '?') ? 'checked' : ''; ?>>?
            <p><input type="number" class="a" name="pet_cost" placeholder="金額" value="<?php echo $pet['pet_cost']; ?>" required /></p>
            <p><textarea name="pet_detail" class="a" placeholder="詳細" cols="60" rows="3" required><?php echo $pet['pet_detail']; ?></textarea></p>
            <p>
                <img src="<?php echo $pet['pet_image']; ?>" alt="pet_image" style="max-width: 100px; max-height: 100px;">
                <input type="file" class="file_boder" name="pet_image">
            </p>
            <p><input type="submit" class="btn-toroku" value="更新"></p>
        </form>
    


        <?php
    } else {
        echo '<p>指定されたIDのペットは存在しません。</p>';
    }
} else {
    echo '<p>ペットIDが指定されていません。</p>';
}
?>
</div>
    </div>

<center>
    <div class="toroku_top_box">
        <a href="top.php" class="toroku_top">戻る</a>
    </div>
</center>

</body>

</html>
