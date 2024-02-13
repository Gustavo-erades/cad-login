const input_email=document.querySelector('#email');
const input_senha=document.querySelector('#senha');
const regexEmail= /^[A-z\.\-]+@([A-z]+\.)+[A-z]+$/g;
function loginRegexEmail(){
    let match=regexEmail.exec(input_email.value);
    if(match!=null){
        input_email.style.backgroundColor="rgb(234, 255, 190)";
        input_email.style.borderColor="#b0ff4f";
    }else{
        input_email.style.backgroundColor="rgb(255, 190, 190)";
        input_email.style.borderColor="#ff4f4f";
    }
}
function loginRegexSenha(){
    let tam_input_senha=(input_senha.value).length;
    console.log(tam_input_senha);
    console.log(input_senha.value);
    if(tam_input_senha>=8){
        input_senha.style.backgroundColor="rgb(234, 255, 190)";
        input_senha.style.borderColor="#b0ff4f";
    }else{
        input_senha.style.backgroundColor="rgb(255, 190, 190)";
        input_senha.style.borderColor="#ff4f4f";
    }
}