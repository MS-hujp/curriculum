<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>本一覧画面</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
</head>
<body><font face="Noto Sans Japanese">

<h1>在庫一覧画面</h1>

    <?php
        session_start();

        if (isset($_SESSION['username'])) {
            print "<p>";
            print $_SESSION['username']."さんがログイン中です";
            print "</p>";

        }else{
            header("Location : login.php");
        }
    
    require_once("connectget.php");
    $data = new getData();
    $userdata = $data->getUserData();
    $data3 = new getData();
    $bookdata = $data3->getbookData();

    ?>    

    <a href="newbook.php" class="btn1">新規登録</a>
    <a href="logout.php" class="btn2">ログアウト</a>

    <table class="booklist" border="1" cellpadding="15" style="border-collapse: collapse; border-color: #d3d3d3">
        <tr>
            <th>タイトル</th>
            <th>発売日</th>
            <th>在庫数</th>
            <th> </th>
        </tr>
        <?php foreach($bookdata as $bdata): ?>
        <tr>
            <td><?php print_r ($bdata['title']); ?></td>
            <td><?php print_r ($bdata['date']); ?></td>
            <td><?php print_r ($bdata['stock']); ?></td>
            <td><a href="delete_book.php?id=<?php echo $bdata['id']; ?>" class="btn3">削除</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
        </font>
</body>
</html>