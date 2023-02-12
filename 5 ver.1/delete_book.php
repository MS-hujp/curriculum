<?php
    require_once("connectget.php");
    $data3 = new getData();
    $bookdata = $data3->getbookData();
   
    $id = $_GET['id'];
    if (empty($id)) {
        header("Location: login.php");
        exit;
    }
    $pdo = new PDO('mysql:charset=UTF8;dbname=amazon;host=localhost', 'root', '');
    $stmtt = $pdo->prepare("DELETE FROM books WHERE id = :id"); 
    $stmtt->bindParam(':id', $id, PDO::PARAM_INT);
    $res = $stmtt->execute();
    $pdo = null;
    echo "削除しました。";
    echo "</br>";
?>
<br>
<a href="mainbook.php" class="btn2">本棚へ戻る</a>

