<?php 
    $str="google";
    $letras=array();
    for($i=0;$i<strlen($str);$i++){
        $str=strtolower($str);
        $letra=substr($str,$i,1);
        if(array_key_exists($letra,$letras)){
            $letras[$letra]+=1;
        }else{
            $letras[$letra]=1;
        }
    }
    print_r($letras);
    echo "<hr>";
    foreach($letras as $chave=>$valor){
        if($valor==1){
            echo "<br>";
            echo "A primeira letra sem repetição é: ".strtoupper($chave);
            break;
        }
    }
