<?php

$fruitslist = ["りんご"=>300,"みかん"=>30,"もも"=>1500];
$numbers = [1,5,2];

function getPrice($price, $num){

    $sum = $price * $num;
    return $sum;
    echo '</br>';

}

$i = 0;
foreach($fruitslist as $key => $value){
    echo $key."は".getPrice($value, $numbers[$i])."円";
    $i++;
    echo '</br>';
}



?>