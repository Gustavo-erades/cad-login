<?php 
// merge sort, quick sort, insertion sort, heap sort, tree sort
// implementando o algoritmo quick sort
$array=[99,2,15,27,32,4,16,19,88,54,13,1];
$tamanho=sizeof($array);
$aux=null;

echo implode(" ",$array);
echo "<hr>";
for($i=1;$i<$tamanho;$i++){
    $aux=$array[$i];
    $j=$i-1;
    while(($j>=0)&&($aux<$array[$j])){
        $array[$j+1]=$array[$j];
        $j--;
    }
    $array[$j+1]=$aux;
}
echo implode(" ",$array);