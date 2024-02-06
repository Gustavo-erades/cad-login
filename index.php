<?php 
    // algoritmo de ordenação de vetor selection sort 
    $array=[6,4,9,8,34,55,99,2];
    $tamanho_array=sizeof($array)-1;
    $val_aux=null;
    for($i=0;$i<=$tamanho_array;$i++){
       for($j=$i+1;$j<=$tamanho_array;$j++){
            if($array[$i]>$array[$j]){
                $val_aux=$array[$j];
                $array[$j]=$array[$i];
                $array[$i]=$val_aux;
            }
       }
    }
    echo implode("-",$array);

