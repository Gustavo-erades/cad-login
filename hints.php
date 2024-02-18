<?php 
   $arrayHints[] = "Anna";
   $arrayHints[] = "Brittany";
   $arrayHints[] = "Cinderella";
   $arrayHints[] = "Diana";
   $arrayHints[] = "Eva";
   $arrayHints[] = "Fiona";
   $arrayHints[] = "Gunda";
   $arrayHints[] = "Gustavo";
   $arrayHints[] = "Guto";
   $arrayHints[] = "Hege";
   $arrayHints[] = "Inga";
   $arrayHints[] = "Johanna";
   $arrayHints[] = "João";
   $arrayHints[] = "Jonas";
   $arrayHints[] = "Jonh";
   $arrayHints[] = "Kitty";
   $arrayHints[] = "Linda";
   $arrayHints[] = "Nina";
   $arrayHints[] = "Ophelia";
   $arrayHints[] = "Petunia";
   $arrayHints[] = "Amanda";
   $arrayHints[] = "Raquel";
   $arrayHints[] = "Cindy";
   $arrayHints[] = "Doris";
   $arrayHints[] = "Eve";
   $arrayHints[] = "Evita";
   $arrayHints[] = "Sunniva";
   $arrayHints[] = "Tove";
   $arrayHints[] = "Unni";
   $arrayHints[] = "Violet";
   $arrayHints[] = "Liza";
   $arrayHints[] = "Elizabeth";
   $arrayHints[] = "Ellen";
   $arrayHints[] = "Wenche";
   $arrayHints[] = "Vicky"; 

   $txt=$_REQUEST["txt"];
   $hints=""; 
   if($txt!=""){
        $txt=strtolower($txt);
        $len=strlen($txt); 
        foreach($arrayHints as $nomes){
            if(stristr($txt,substr($nomes,0,$len))){ 
                if($hints==""){
                    $hints=$nomes;
                }else{
                    $hints.=", $nomes";
                }
            }
        }
   }

   echo $hints===""?"sem sugestões":$hints;
