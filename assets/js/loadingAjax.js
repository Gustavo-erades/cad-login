function chamarPagina(url){
    let ajax= new XMLHttpRequest();
    ajax.open('GET', url);
    ajax.onreadystatechange = () => {
       if(ajax.readyState==4 && ajax.status==200){
        window.location.assign(url);
       }
    }
    ajax.send()
}