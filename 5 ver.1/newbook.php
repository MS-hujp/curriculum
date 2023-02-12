<!-- 本の新規登録画面 -->
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
    <title>本登録画面</title>
</head>
</html>

<body><font face="Noto Sans Japanese">
    <div class="btitle">本 登録画面</div>
    
    <?php 
    require_once('connect.php'); 
    ?>

<div class="form">
    <form action="rbook.php" method="post">
        <input type="name" name="title" placeholder="タイトル" />
<?php echo '</br>'; ?>
<?php echo '</br>'; ?>
        <input type="date1" name="date1" placeholder="発売日" />
<?php echo '</br>'; ?>
<?php echo '</br>'; ?>
          <div class="stockre">在庫数</div>
         <select name="dropdown">
            <?php
            echo "<option>選択して下さい</option>";
            for($i=1; $i<101; $i++){
             echo "<option value={$i}>";
             echo $i;
             echo "</option>";
            }
         ?>
         </select>
<?php echo '</br>'; ?>
<?php echo '</br>'; ?>
        <input type="submit" class="bregister" value="登録" />
    </form>
</div>
</body>