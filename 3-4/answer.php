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
print $port1;
echo '</br>';

for($i=0; $i<3; $i++){
  $s = ["①","②","③"];
  echo '</br>';
  echo $s[$i]."の答え";
  echo '</br>';

  $p = [$port1,$port2,$port3];
  echo getresult($p[$i]);
  echo '</br>';
 
}

 function getresult($a) {
  if($a == 80 || "PHP" || "select" ){
    return '</br>';
    return "正解！";
    return '</br>';
  }else if($a != 80 || "PHP" || "select"){
    return "残念・・・";
    return '</br>';
  }else{
    return "残念・・・";
    return '</br>';
  }
}
 getresult($port1);
 getresult($port2);
 getresult($port3);


?>

</div>