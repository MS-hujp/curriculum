<p>
    <?php
     echo date("Y/m/d", time())."の運勢は";
     echo '</br>';
    
     $numbers = $_POST['numbers'];
    echo '</br>';
    $numarray = (str_split($numbers));
    srand((float) microtime() * 10000000);
    $rand_keys = array_rand($numarray, 1);
    if($numarray[$rand_keys] != 0 && $numarray[$rand_keys] != 1 && $numarray[$rand_keys] != 2 && $numarray[$rand_keys] != 3 && $numarray[$rand_keys] != 4 && $numarray[$rand_keys] != 5 && $numarray[$rand_keys] != 6 && $numarray[$rand_keys] != 7 && $numarray[$rand_keys] != 8 && $numarray[$rand_keys] != 9){
     echo "入力に誤りがあります。";
    }else{
    echo "選ばれた数字は".$numarray[$rand_keys];
    echo '</br>';
    }

    if($numarray[$rand_keys] == 0){
        echo "凶";
    }else if($numarray[$rand_keys] >= 1 && $numarray[$rand_keys] <= 3){
        echo "小吉";
    }else if($numarray[$rand_keys] >= 4 && $numarray[$rand_keys] <= 6){
        echo "中吉";
    }else if($numarray[$rand_keys] >= 7 && $numarray[$rand_keys] <= 8){
        echo "吉";
    }else if($numarray[$rand_keys] == 9){
        echo "大吉";
    }else{
        echo "0~9までの数字を入力してください。";
    }
    
    
    ?>
</p>

