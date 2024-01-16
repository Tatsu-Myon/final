<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="css/rest.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

</head>

<body>
    <center>
        <div class="login_back">
            <div class="login_area">
                <div class="login_img">
                    <img src="img/loginkey.png">
                </div>


                <from action="login-ouput.html" name="login-output" method="post">
                <input type="text" class="login_input" placeholder="--NAME--">
                <input type="text" class="login_input" placeholder="--PASSWORD--">
                    <div class="login_signup">
                    <a href="#" class="login_a" onclick="document.login-output.submit();"><span class="login_span">Login</span></a>
                </from>
                <a href="signup.php" class="login_a"><span class="login_span">SignUp</span></a>
                </div>

            </div>
        </div>
    </center>
</body>

</html>