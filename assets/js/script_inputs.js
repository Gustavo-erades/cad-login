const input_email=document.querySelector('#email');
const input_senha=document.querySelector('#senha');
function loginRegexEmail(){
    console.log("length: "+input_email.length);
    console.log("value: "+input_email.value);
    if(input_email.value!=""){
        input_email.style.backgroundColor="rgb(234, 255, 190)";
        input_email.style.borderColor="#b0ff4f";
    }else{
        input_email.style.backgroundColor="rgb(255, 190, 190)";
        input_email.style.borderColor="#ff4f4f";
    }
}
function loginRegexSenha(){
    let tam_input_senha=(input_senha.value).length;
    if(tam_input_senha>=8){
        input_senha.style.backgroundColor="rgb(234, 255, 190)";
        input_senha.style.borderColor="#b0ff4f";
    }else{
        input_senha.style.backgroundColor="rgb(255, 190, 190)";
        input_senha.style.borderColor="#ff4f4f";
    }
}