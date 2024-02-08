<?php 
//OBS: fazer a mesma coisa mas usando o algoritmo bubble sort
// merge sort, quick sort, insertion sort, heap sort, tree sort
// complexidade do binary search: O(log N)
    $array=[11,99,23,44,55,13,10,2,11,2];
    $num=23;
    //ordena o array usando o bubble sort
    $tamanho_array=sizeof($array)-1;
    $aux=null;
    for($i=0;$i<=$tamanho_array;$i++){
        for($j=0;$j<=$tamanho_array-$i-1;$j++){
            if($array[$j]>$array[$j+1]){
                $aux=$array[$j+1];
                $array[$j+1]=$array[$j];
                $array[$j]=$aux;
            }
        }
    }
    echo implode(" | ",$array);
    echo "<hr>";
    echo "número procurado: {$num}";
    echo "<hr>";
    // aplica o algoritmo de binary search
    $inicio=0;
    $fim=9;
    $flag=false;
    while(($inicio<=$fim)&&($flag==false)){
        $meio=intval(($inicio+$fim)/2);
        if($array[$meio]==$num){
            $flag=true;
        }elseif($array[$meio]>$num){
            $fim=$meio-1;
        }else{
            $inicio=$meio+1;
        }
    }
    if($flag){
        echo "Achou!";
    }else{
        echo "Número não encontrado!";
    }

