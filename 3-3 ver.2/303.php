<?php

echo "0~9の番号を使って好きな数字の羅列を入力してください。";

echo '</br>';
echo '</br>';
echo '</br>';

?>

<form action="303result2.php" method="post">

  <input type="number" name="numbers" />
  <input type="submit" value="占う" />

</form>


<?php
/*
srand((float) microtime() * 10000000);
$input = array(1,2,3,4,5);
$rand_keys = array_rand($input,1);
echo $input[$rand_keys];
echo '</br>';
echo $input[$rand_keys[1]];
*/
?>