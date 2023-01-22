<?php

function getfruitsprice($name, $price){

   $fruitslist = ["りんご"=>1,"みかん"=>5,"もも"=>2];

    $sum = $price * $fruitslist[$name];
    print $name."は".$sum."円です。";
    echo '</br>';


}

//Apple
getfruitsprice("りんご", 300);
//Orange
getfruitsprice("みかん", 30);
//Peach
getfruitsprice("もも", 1500);

?>