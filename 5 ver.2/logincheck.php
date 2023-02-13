<!-- ログイン認証結果の画面 -->
<?php
       
       require_once("connectget.php"); 
       $data = new getData();
       $userdata = $data->getUserData();
       
       $data2 = new getData();
       $passdata = $data2->getPassData();

?>

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
    <title>ログイン結果</title>
</head>
</html>

<body><font face="Noto Sans Japanese">
     
<?php 
     $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
     $password = htmlspecialchars($_POST['password'], ENT_QUOTES);

     if(empty($_POST['username'])){
        echo "名前が未入力です";
        echo '</br>';
        exit;
     }else if(empty($_POST['password'])){
        echo "パスワードが未入力です";
        echo '</br>';
        exit;
     }else{
        echo "ログイン認証を行います";
        echo '</br>';
     }

     $namecheck = 0;
     $passcheck = 0;

     $key = array_search($username, $userdata);
     echo $key;
     if($key != false){
        echo '</br>';
        echo "user is exist";
        echo '</br>';
        $namecheck = $namecheck + 1;

     }else{
        echo '</br>';
        echo "user is not exist";
        echo '</br>';

     }
     
   ////パスワードがあってるか

    $key2 = array_search($password, $passdata);
    echo $key2;
    if($key != false){
       echo '</br>';
       echo "pass is correct";
       echo '</br>';
       $passcheck = $passcheck + 1;
    }else{
       echo '</br>';
       echo "pass is not correct";
       echo '</br>';

    }
   
    //名前とパス両方あってるか
      var_dump($namecheck);
      var_dump($namecheck);

     if($namecheck > 0 && $passcheck > 0){
        echo '</br>';
        echo "ログイン成功";
        echo '</br>';
         
        //名前をmainbook.phpへ送る
         session_start();
         $_SESSION['username'] = 'username';
         $uname = $_POST['username'];
         $_SESSION['username'] = $uname;
         echo '</br>';
         echo "お疲れ様です".$uname."さん";

        header("Location: mainbook.php ");
        exit();

      }else{
        echo '</br>';
        echo "ログイン失敗";
        echo '</br>';
      }
     
?>

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