function searchHints(str){
    if(str.length==0){
        document.querySelector("#hints").innerHTML="";
        return;
    }else{
        var ajax= new XMLHttpRequest();
        ajax.onreadystatechange=()=>{
            if(ajax.readyState==4 && ajax.status==200){
                document.querySelector("#hints").innerHTML=" "+ajax.responseText;
            }
        }
    }
    ajax.open("GET","hints.php?txt="+str);
    ajax.send();
}