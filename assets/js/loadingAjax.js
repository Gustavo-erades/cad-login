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
            const xmlTexto=ajax.responseText;
            const parser = new DOMParser();
            const xmlDoc=parser.parseFromString(xmlTexto,'text/xml');
            console.log(xmlDoc);
        }
    }
    ajax.send();
}