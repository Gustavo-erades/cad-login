<?php 
    // algoritmo de ordenação de vetor bubble sort 
    $array=[46,560,12,660,835];
    for($i=0;$i<sizeof($array);$i+=1){
        for($j=0;$j<sizeof($array)-$i-1;$j+=1){
            if($array[$j]>$array[$j+1]){
                $aux=$array[$j+1];
                $array[$j+1]=$array[$j];
                $array[$j]=$aux;
            }
        }
    }
    echo implode("-",$array);

