<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>登録完了</title>
</head>
<body>
<?php
//ここでもuserがログインしてるかsessionでうけとりifで判定
   session_start();
   if (isset($_SESSION['username'])) {
    print "<p>";
    print $_SESSION['username']."さんがログイン中です";
    print "</p>";
    
    }else{
    header("Location : login.php");
    }
    
   $title = $_POST['title'];
   $date1 = $_POST['date1'];
   $stocknum = $_POST['dropdown'];

   // 作成したconnect.phpを読み込む
      require_once('connectget.php');

   // 実行したいSQL文を準備
   // 今回はusersテーブルにレコードを追加
   $sql = "INSERT INTO books (title, date, stock) VALUES ('$title', '$date1', '$stocknum')";
   
   // 関数connect()からPDOを取得する
    $pdo = connect();
    try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo '登録完了しました！';
    } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
    }
?>
<br>
<br>
<br>
<a href="mainbook.php" class="btn2">本棚へ戻る</a>
</body>
</html>

