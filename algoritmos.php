<?php 
//OBS: fazer a mesma coisa mas usando o algoritmo bubble sort
// merge sort, quick sort, insertion sort, heap sort, tree sort
// complexidade do binary search: O(log N)
    $array=[11,99,23,44,55,13,10,2,11,2];
    $num=23;
    //ordena o array usando o select sort
    $tamanho_array=sizeof($array)-1;
    $aux=null;
    for($i=0;$i<=$tamanho_array;$i++){
        for($j=$i+1;$j<=$tamanho_array;$j++){
            if($array[$i]>$array[$j]){
                $aux=$array[$j];
                $array[$j]=$array[$i];
                $array[$i]=$aux;
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
    


