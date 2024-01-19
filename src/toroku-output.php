

<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I.wt.P</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
if (!empty($_POST['pet_name'] && $_POST['pet_sex'] && $_POST['pet_cost'] && $_POST['pet_detail'] && $_FILES['pet_image']['name'])) {
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo->prepare('INSERT INTO Pet(pet_name, pet_sex, pet_cost, pet_detail, pet_image) VALUES (?, ?, ?, ?, ?)');
    
    $target_dir = "img/"; 
    $target_file = $target_dir . basename($_FILES["pet_image"]["name"]);
    move_uploaded_file($_FILES["pet_image"]["tmp_name"], $target_file);

    $sql->execute([$_POST['pet_name'], $_POST['pet_sex'], $_POST['pet_cost'], $_POST['pet_detail'], $target_file]);
    echo '<h1 class="toroku_h1">登録完了</h1>';
    echo '<center><br>';
    
    echo '<div class="toroku_top_box"><a href="top.php" class="toroku_top">トップへ戻る</a></div>';
  
}

?>
<form >
</body>
</html>