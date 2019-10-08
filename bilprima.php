<?php
    for($i=1; $i<=37; $i++){
        $a = 0;
        for($j=1; $j<=100; $j++){
            if($i % $j == 0){
                $a++;
            }
        }
        if($a == 2){
            echo $i.' adalah bilangan prima <br>';
        }
    }
?>