//inputs
const input_nome=document.querySelector('#nome');
const input_nickname=document.querySelector('#nickname');
const input_dt_nasc=document.querySelector('#dt_nasc');
const input_repetir_senha=document.querySelector('#repetir_senha');
//patterns regex
const regexNome=/^[A-zÀ-ü]+$/;
const regexNick=/^[A-z0-9\D]+/;

function cadNome(){
    if(regexNome.exec(input_nome.value)!=null){
        input_nome.style.backgroundColor="rgb(234, 255, 190)";
        input_nome.style.borderColor="#b0ff4f";
    }else{
        input_nome.style.backgroundColor="rgb(255, 190, 190)";
        input_nome.style.borderColor="#ff4f4f";
    }
}

function cadNick(){
    if(regexNick.exec(input_nickname.value)!=null){
        input_nickname.style.backgroundColor="rgb(234, 255, 190)";
        input_nickname.style.borderColor="#b0ff4f";
    }else{
        input_nickname.style.backgroundColor="rgb(255, 190, 190)";
        input_nickname.style.borderColor="#ff4f4f";
    }
}

function cadDtNasc(){
    if(input_dt_nasc.value!=""){
        input_dt_nasc.style.backgroundColor="rgb(234, 255, 190)";
        input_dt_nasc.style.borderColor="#b0ff4f";
    }else{
        input_dt_nasc.style.backgroundColor="rgb(255, 190, 190)";
        input_dt_nasc.style.borderColor="#ff4f4f";
    }
}

function repetirSenha(){
    let tam_input_senha=(input_repetir_senha.value).length;
    if(tam_input_senha>=8){
        input_repetir_senha.style.backgroundColor="rgb(234, 255, 190)";
        input_repetir_senha.style.borderColor="#b0ff4f";
    }else{
        input_repetir_senha.style.backgroundColor="rgb(255, 190, 190)";
        input_repetir_senha.style.borderColor="#ff4f4f";
    }
}