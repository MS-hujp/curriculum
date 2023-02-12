<!-- ユーザー登録完了画面 -->
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
    <title>ユーザー登録完了</title>
</head>
</html>

<body>
<?php
   $username = $_POST['username'];
   $password = $_POST['password'];
   $password_hash = password_hash($password, PASSWORD_DEFAULT);

   // 作成したconnect.phpを読み込む
      require_once('connect.php');

   // 実行したいSQL文を準備
   // 今回はusersテーブルにレコードを追加
   if(isset($_POST['username']) && isset($_POST['password'])){
   
    $sql = "INSERT INTO users (name, pass) VALUES ('$username', '$password')";
  
   }else{
   
    echo "登録エラーです。ユーザー名とパスワードを入力してください。";
   }

   // 関数connect()からPDOを取得する
    $pdo = connect();
    try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo 'ユーザー登録完了しました！';
    } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
    }
?>
<br>
<br>
<br>
<a href="login.php" class="btn2">ログイン</a>
</body>