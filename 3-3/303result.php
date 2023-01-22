<p>
    <?php
     echo date("Y/m/d", time())."の運勢は";
     echo '</br>';
    
     $numbers = $_POST['numbers'];
    

    
    $i = 0;
    $list = array();

    while($numbers > 0){
        $num1 = floor($numbers / 10);
        $rem = $numbers-($num1 * 10);
        $numbers = $num1;
        $list[] = $rem;   
    }
      for($j=0; $j<10; $j++)
      {
        $randam = mt_rand(1, 10);
      
        $fortune = 0;
      if(in_array($randam, $list)){
           echo "選ばれた数字は".$randam;
           echo '</br>';
           if($randam == 0){
            echo "凶";
           }else if($randam >= 1 && $randam < 4){
            echo "小吉";
           }else if($randam >= 4 && $randam < 7){
            echo "中吉";
           }else if($randam >= 7 && $randam < 9){
            echo "吉";
           }else{
                echo "大吉"; 
           }
           exit;
      }else{
           $j++;
      }
      

    }
    
    ?>
</p>

