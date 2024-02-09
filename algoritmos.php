<?php 
// merge sort, quick sort, insertion sort, heap sort, tree sort
// implementando algoritmo merge sort
$array=[2,22,34,55,16,1,54,102,203,19];
$inicio=0;
$fim=sizeof($array)-1;
function imprimir($array){
    echo implode("-",$array);
}
function merge_sort($array,$inicio,$fim){
    $array_aux= array();
    if($inicio<$fim){
        $meio=intval(($inicio+$fim)/2);
        //recursividade
        merge_sort($array,$inicio,$meio);
        merge_sort($array,$meio+1,$fim);
        //merge
        $esquerda=$inicio;
        $direita=$meio+1;
        $val_aux=$inicio;
        while($esquerda<=$meio && $direita<=$fim){
            if($array[$esquerda]<$array[$direita]){
                $array_aux[$val_aux]=$array[$esquerda];
                $esquerda++;
            }else{
                $array_aux[$val_aux]=$array[$direita];
                $direita++;
            }
            $val_aux++;
        }
        while($esquerda<=$meio){
            $array_aux[$val_aux]=$array[$esquerda];
            $esquerda++;
            $val_aux++;
        }
        while($direita<=$fim){
            $array_aux[$val_aux]=$array[$direita];
            $direita++;
            $val_aux++;
        }
        for($i=$inicio;$i<=$fim;$i++){
            $array[$i]=$array_aux[$i];
        }
    }
    
}
imprimir($array);
echo "<hr>";
merge_sort($array,$inicio,$fim);
imprimir($array);
/*$array_aux[0]="oi";
print_r($array_aux);
for($i=0;$i<sizeof($array_aux);$i++){
    echo $array_aux[$i];
}*/