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

$name1 = $_POST['name1'];
echo '</br>';
echo $name1."さんの結果は・・・?";

?>
</div>

<body><body style="background-color:grey;"></body>

<div class="answers">
<?php 
 
 $port1 = $_POST['port1'];
 $port2 = $_POST['port2'];
 $port3 = $_POST['port3'];
 $correct1  = $_POST['correct1'];
 $correct2  = $_POST['correct2'];
 $correct3  = $_POST['correct3'];

 echo '</br>';
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
  echo judge($port1, $correct1);
  echo '</br>'; 
  echo '</br>';
  echo "②の答え";
  echo '</br>';
  echo '</br>';
  echo judge($port2, $correct2);
  echo '</br>';
  echo '</br>';
  echo "③の答え";
  echo '</br>';
  echo '</br>';
  echo judge($port3, $correct3);
  echo '</br>';


?>

</div>