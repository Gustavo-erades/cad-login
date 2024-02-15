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