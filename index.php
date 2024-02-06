<?php 
    $array1=[4,8,9,1,3];
    print_r($array1);
    echo "<br>";
    echo implode('-',$array1);
    echo "<hr>";

    $min=0;
    $max=sizeof($array1)-1;
    $tmp=null;
    while($min<$max){ 
        $tmp=$array1[$min];
        $array1[$min]=$array1[$max];
        $array1[$max]=$tmp;
        $min++;
        $max--;
    }
    echo implode('-',$array1);
    echo "<br>";
    print_r($array1);
    
    /*
    $posicoes=sizeof($array1)-1;
    $limite=sizeof($array1)-1;
    $array2=array($posicoes);
    for($i=0;$i<=$limite;$i++){ 
        $array2[$i]=$array1[$posicoes];
        $posicoes--;
    }
    echo implode('-',$array2);
    echo "<br>";
    print_r($array2);*/