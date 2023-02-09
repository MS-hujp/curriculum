<style type="text/css">

table.blog{
    margin-left:100px;
    margin-top:10px;
    margin-bottom: 10px;
}
th{
 background-color: #87ceeb; 
}
td{
    background-color: #e0ffff;
}

</style>

<!-- MySQL上のデータと接続する -->
<?php
$dbname = 'checktest4';
$host = 'localhost';
$user = 'root';
$password = '';
$dsn = 'mysql:dbname='.$dbname.';host='.$host.';charset=utf8';

try{
    $dbh = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    // echo "接続成功";
    //SQLの準備
    $sql = 'SELECT * FROM post';
    $sql_users = 'SELECT first_name FROM users';
    $sql_users2 = 'SELECT last_name FROM users';
    $sql_login = 'SELECT last_login FROM users';
    //SQLの実行
    $stmt = $dbh->query($sql);
    $stmt2 = $dbh->query($sql_users);
    $stmt3 = $dbh->query($sql_users2);
    $stmt4 = $dbh->query($sql_login);
    //SQLの結果受け取り
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    $result2 = $stmt2->fetchall(PDO::FETCH_COLUMN);
    $result3 = $stmt3->fetchall(PDO::FETCH_COLUMN);
    $result4 = $stmt4->fetchall(PDO::FETCH_COLUMN);
    // var_dump($result);
    $dbh = null;
}catch(PDOException $e){
    echo '接続失敗', $e->getMessage();
    exit();
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ブログ記事一覧</title>
</head>
<body>
<!-- 一番うえ -->
<div class="gb">
<div class="gazou"><img src="4no2logo.png" width="200px" height="120px"></div>

<div class="box12">
<div class="box1">
    <?php 
    foreach($result2 as $name){
        foreach($result3 as $name2){
          echo "ようこそ ".$name2.$name." さん";
        }  
    }
    ?>
</div>
<div class="box2">
    <?php
    foreach($result4 as $login){
      echo $login;
    }
    ?>
</div>
</div>
</div>

<!-- 真ん中のテーブル -->
<table class="blog" border="0">
    <tr>
        <th>記事ID</th>
        <th>タイトル</th>
        <th>カテゴリ</th>
        <th>本文</th>
        <th>投稿日</th>
    </tr>
    <?php foreach($result as $column): ?>
    <tr>
        <td><?php echo $column['id'] ?></td>
        <td><?php echo $column['title'] ?></td>

        <td>
            <?php
            $list = array();
            $list = array($column['category_no']);
            foreach($list as $value){
                if($value == 1){
                    echo "食事";
                }else if($value == 2){
                    echo "旅行";
                }else{
                    echo "その他";
                }
                break;
            }
            ?>
        </td>
        <td><?php echo $column['comment'] ?></td>
        <td><?php echo $column['created'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<!-- 一番下のボックス -->
<?php
echo '<div class="sita">Y&I group.inc</div>';
?>
</body>
</html>
