<?php 
    $array=[4,6,2,10];
    echo implode("-",$array);
    echo "<br>";
    $max=sizeof($array)-1;
    $array2=[];
    $cont=0;
    for($i=$max;$i>=0;$i--){
        $array2[$cont]=$array[$i];
        $cont++;
    }
    echo implode("-",$array2);
