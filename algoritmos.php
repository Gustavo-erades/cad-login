<?php 
// quick sort, insertion sort, heap sort, tree sort
// implementando algoritmo merge sort
$array=[2,22,34,55,16,1,54,102,203,19];
$inicio=0;
$fim=sizeof($array)-1;
function divideArray($array, $inicio, $fim){
    if($fim-$inicio>1){
        $meio=intval(($inicio+$fim)/2);
        divideArray($array,$inicio, $meio);
        divideArray($array,$meio+1, $fim);
        merge($array,$inicio,$meio,$fim);
    }
}
function merge($array,$inicio, $meio, $fim){
    $esquerda=array($meio-$inicio);
    $direita=array($fim-$meio);
    $top_direita=0;
    $top_esquerda=0;
    for($i=$inicio;$i<=$fim;$i++){
        if($top_esquerda>=sizeof($esquerda)){
            $array[$i]=$top_direita;
            $top_direita++;
        }elseif($top_direita>=sizeof($direita)){
            $array[$i]=$top_esquerda;
            $top_esquerda++;
        }elseif($esquerda[$top_esquerda]<$direita[$top_direita]){
            $array[$i]=$esquerda[$top_esquerda];
            $top_esquerda++;
        }else{
            $array[$i]=$direita[$top_direita];
            $top_direita++;
        }
    }
    
    echo implode("-",$array);
}
echo divideArray($array, $inicio, $fim);