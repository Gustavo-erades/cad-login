<?php 
// merge sort, quick sort, insertion sort, heap sort, tree sort
// implementando o algoritmo quick sort
$array=[99,2,15,27,32,4,16,19,88,54,13,1];
$inicio=0;
$fim=sizeof($array)-1;
function quicksort($array,$inicio,$fim){
    if($inicio<$fim){
        $pivo=partition($array,$inicio,$fim);
        quicksort($array,$inicio,$pivo-1);
        quicksort($array,$pivo+1,$fim);
    }
}
function partition($array,$inicio,$fim){
    $pivot=$array[$fim];
    $i=$inicio;
    $aux=null;
    for($j=$inicio;$j<$fim;$j++){
        if($array[$j]<=$pivot){
            $aux=$array[$j];
            $array[$j]=$array[$i];
            $array[$i]=$aux;
            $i++;
        }
    }
    $aux=$array[$i];
    $array[$i]=$array[$fim];
    $array[$fim]=$aux;
    return $i;
}
echo implode(" ",$array);
echo "<hr>";
echo quicksort($array,$inicio,$fim);
