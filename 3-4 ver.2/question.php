<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Question</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
</html>

<body><body style="background-color:grey;"></body>

<?php
    session_start();
    $_SESSION['name'] = 'name';
?>

<div class="greeting">
<p>
<?php
$name = $_POST['name'];
$_SESSION['name'] = $name;
echo '</br>';
echo "お疲れ様です".$name."さん";
?>
</p>
</div>

 <div class="sentence">
    <h2>①ネットワークのポート番号は何番？</h2>
 </div>

<div class="sentence">
<p>
<?php 

 $q1 = [80,22,20,21];
 echo '<form action="answer.php" method="post">';
 
 foreach($q1 as $value1){
   echo "<input type=\"radio\" name=\"port1\" value=\"$value1\"/>";
   echo $value1;
   
 }

 echo '</br>';
 echo '<h2>②Webページを作成するための言語は？</h2>';

 $q2 = ["PHP","Python","JAVA","HTML"];

 foreach($q2 as $value2){ 
   echo "<input type=\"radio\" name=\"port2\" value=\"$value2\"/>";
   echo $value2;

  }

  echo '</br>';
  echo '<h2>③MySQLで情報を取得するためのコマンドは？</h2>';
 
 $q3 = ["join","select","insert","update"];

 foreach($q3 as $value3){
   echo "<input type=\"radio\" name=\"port3\" value=\"$value3\"/>";
   echo $value3;

  }

  echo '</br>';
  echo '<input type="submit" value="回答する" />';
  echo '</form>';

?>
</p>
</div>