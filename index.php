<?php 
    $array=[4,6,2,10,70,88,99,23,44,32,21,1];
    $num=32;
    for($i=0;$i<sizeof($array);$i++){
        if($array[$i]==$num){
            echo "achou o número {$num} na posicao ".$i+1;
            break;
        }
    }
