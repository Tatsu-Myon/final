<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I.wt.P</title>
  <link rel="stylesheet" href="css/style.css">

</head>

<h1 class="toroku_h1">登録画面</h1>

<body>
  <div class="box">
    <div class="magin">
      <form action="toroku-output.php" method="post" enctype="multipart/form-data">
        <p><input type="text" class="a" name="pet_name" placeholder="名前" class="left" required /></p>
        <input type="radio" class="a" name="pet_sex" value="♂" id="sex" required>♂
        <input type="radio" class="a" name="pet_sex" value="♀" id="sex" required>♀
        <input type="radio" class="a" name="pet_sex" value="?" id="sex" required>?
        <p><input type="number" class="a" name="pet_cost" placeholder="金額" required /></p>
        <p><textarea name="pet_detail" class="a" placeholder="詳細" cols="60" rows="3" required></textarea></p>
        <p><input type="file" class="file_boder" name="pet_image" required /></p>
        <p><input type="submit" class="btn-toroku" value="送信"></p>
      </form>
    </div>
  </div>
  <center>
  <div class="toroku_top_box">
  <a href="top.php" class="toroku_top">戻る</a>
  </div>
</body>

</html>