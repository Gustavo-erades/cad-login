<?php 
    $str="Paralelepipedo";
    $letras=array();
    for($i=0;$i<strlen($str);$i++){
        $str=strtolower($str);
        echo substr($str,$i,1);
        $letra=substr($str,$i,1);
        if(array_key_exists($letra,$letras)){
            $letras[$letra]+=1;
        }else{
            $letras[$letra]=1;
        }
        echo "<br>";
    }
    print_r($letras);
    foreach($letras as $chave=>$valor){
        if($valor==1){
            echo "<br>";
            echo "A primeira letra sem repetição é: ".strtoupper($chave);
            break;
        }
    }
    