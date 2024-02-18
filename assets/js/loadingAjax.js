function chamarPagina(url){
    const ajax= new XMLHttpRequest();
    ajax.open('GET', url);
    ajax.onreadystatechange = () => {
       if(ajax.readyState==4 && ajax.status==200){
        window.location.assign(url);
       }else if(ajax.status==404){
        window.location.href='erro404.html';
       }
    }
    ajax.send()
}
function chamarConteudo(url){
    const ajax= new XMLHttpRequest();
    ajax.open('GET',url);
    ajax.onreadystatechange=()=>{
        if(ajax.readyState==4 && ajax.status==200){
            document.querySelector("#conteudo-textos").innerHTML=ajax.responseText;
        }else if(ajax.status==404){
            window.location.href="erro404.html";
        }
    };
    ajax.send();
}
function listarFilmes(){
    const ajax= new XMLHttpRequest();
    ajax.open('GET','filmes.xml',true);
    ajax.onreadystatechange=()=>{
        if(ajax.readyState==4 && ajax.status==200){
            const xmlTexto=ajax.responseXML;
           /* const xmlTexto=ajax.responsetext;
            const parser = new DOMParser();
            const xmlDoc=parser.parseFromString(xmlTexto,'text/xml');*/
            const jsonDoc=xmlToJson(xmlTexto);
            /*console.log(xmlTexto.getElementsByTagName("filme"))*/
            for(let i in jsonDoc['filmes']['filme']){
                console.log(jsonDoc['filmes']['filme'][i]);
            }
        }
    }
    ajax.send();
}