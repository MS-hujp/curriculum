<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>answer</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
</html>

<div class="headerofanswer">
 <?php
    session_start();

    if (isset($_SESSION['name'])) {
        print "<p>";
        print $_SESSION['name']."さんの結果は・・？";
        print "</p>";
    }
 ?>
</div>

<body><body style="background-color:grey;"></body>

<div class="answers">
<?php 

 $port1 = $_POST['port1'];
 $port2 = $_POST['port2'];
 $port3 = $_POST['port3'];

 echo '</br>';

 function judge($answer , $correct){
  if($answer == $correct){
  
  echo "正解！";
  } else {
  
  echo "残念…";
  }
  }

  echo "①の答え";
  echo '</br>';
  echo '</br>';
  echo judge($port1, 80);
  echo '</br>'; 
  echo '</br>';
  echo "②の答え";
  echo '</br>';
  echo '</br>';
  echo judge($port2, "PHP");
  echo '</br>';
  echo '</br>';
  echo "③の答え";
  echo '</br>';
  echo '</br>';
  echo judge($port3, "select");
  echo '</br>';


?>

</div>