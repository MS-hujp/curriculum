<!-- getDataに結びつけ、データを受け取る -->
<?php

require_once("getData.php");
$data = new getData();
$userdata = $data->getUserData();

$data2 = new getData();
$postdata = $data2->getPostData();
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
    echo "ようこそ ".$userdata['last_name'].$userdata['first_name']." さん";

    ?>
</div>
<div class="box2">
    <?php
    echo $userdata['last_login'];
    // foreach($result4 as $login){
    //   echo $login;
    // }
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

    <?php foreach($postdata as $value2): ?>
    <tr>
        <td><?php print_r ($value2['id']);  ?></td>
        <td><?php print_r ($value2['title']); ?></td>

        <td>
            <?php
            $list = array();
            $list = array($value2['category_no']);
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
        <td><?php print_r ($value2['comment']) ?></td>
        <td><?php print_r ($value2['created']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<!-- 一番下のボックス -->
<?php
echo '<div class="sita">Y&I group.inc</div>';
?>
</body>
</html>
