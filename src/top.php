<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>I.wt.P</title>
</head>

<body>
    <header>
        <h1>I.wt.P</h1>
        <button onclick="location.href='edit.php'">編集</button>
        <button onclick="location.href='new_category.php'">カテゴリ追加</button>

        <section class="ranking">
            <h2>欲しいペットランキング</h2>
            <!-- ランキング表示のためのコード -->
        </section>
    </header>

    <hr>

    <h2>カテゴリ</h2>
    <section class="categories">
        <div class="flex">
            <a href="signup.php" class="category_img">
                <img src="img/dog.png" alt="Dog Image">
            </a>
            <a href="signup.php" class="category_img">
                <img src="img/cat.png" alt="Cat Image">
            </a>
            <a href="signup.php" class="category_img">
                <img src="img/bird2.png" alt="Bird Image">
            </a>
            <a href="signup.php" class="category_img">
                <img src="img/fish.png" alt="Fish Image">
            </a>
        </div>
    </section>
</body>

</html>
