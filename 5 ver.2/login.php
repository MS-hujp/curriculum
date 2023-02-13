<!-- ログイン画面 -->
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <title>ログイン画面</title>
</head>
</html>

<body><font face="Noto Sans Japanese">
    <div class="header"><div class="login">ログイン画面</div><a href="newuser.php" class="btn4">新規ユーザー登録</a></div>
<div class="form">
    <form action="logincheck.php" method="post">
        <input type="username" name="username" placeholder="ユーザー名" />
<?php echo '</br>'; ?>
<?php echo '</br>'; ?>
        <input type="password" name="password" placeholder="パスワード" />
<?php echo '</br>'; ?>
<?php echo '</br>'; ?>
        <input type="submit" class="submit" value="ログイン" />
    </form>
</div>

<?php

?>

</body>