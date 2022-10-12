let loginForm = document.querySelector(".login-form");
let regisForm = document.querySelector(".registration-form");

function showRegis() {
    loginForm.style.display = "none";
    regisForm.style.display = "block";
}

function showLogin() {
    regisForm.style.display = "none";
    loginForm.style.display = "block";
}

// [START]Relacionado con mostrar y ocultar el placeholder de USUARIO en el LOGIN.
let userPlaceholderLogin = document.querySelector(".userPlaceholderLogin");
let userInputLogin = document.getElementById("userLogin");

function hideUserPlaceholderLogin(){
    userPlaceholderLogin.style.display = "none";
}



function showUserPlaceholderLogin(){

    if(userInputLogin.value == ""){
    userPlaceholderLogin.style.display = "block";
    }
    
}
// [FIN]

// [START]Relacionado con mostrar y ocultar el placeholder de CONTRASEÑA en el LOGIN.
let passPlaceholderLogin = document.querySelector(".passPlaceholderLogin");
let passInputLogin = document.getElementById("passLogin");

function hidePassPlaceholderLogin(){
    passPlaceholderLogin.style.display = "none";
}



function showPassPlaceholderLogin(){

    if(passInputLogin.value ==""){
        passPlaceholderLogin.style.display = "block";
    }
}
// [FIN]

// [START]Relacionado con mostrar y ocultar el placeholder de USUARIO en el SIGNUP.
let userPlaceholderRegis = document.querySelector(".userPlaceholderRegis");
let userInputRegis = document.getElementById("userRegis");

function hideUserPlaceholderRegis(){
    userPlaceholderRegis.style.display = "none";
}



function showUserPlaceholderRegis(){

    if(userInputRegis.value == ""){
    userPlaceholderRegis.style.display = "block";
    campoInValidoEmailRegis.style.display ="none";
    campoValidoEmailRegis.style.display ="none";
    }
    
}
// [FIN]

// [START]Relacionado con mostrar y ocultar el placeholder de EMAIL en el SIGNUP.
let emailPlaceholderRegis = document.querySelector(".emailPlaceholderRegis");
let emailInputRegis = document.getElementById("emailRegis");

function hideEmailPlaceholderRegis(){
    emailPlaceholderRegis.style.display = "none";
    emailInputRegis.value = "";
}



function showEmailPlaceholderRegis(){

    if(emailInputRegis.value==""){
        emailPlaceholderRegis.style.display = "block";
    }
}

function checkEmail(){
    let correo = emailInputRegis.value;
    const patron =/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    let campoValidoEmailRegis = document.querySelector(".campoValidoEmailRegis");
    let campoInValidoEmailRegis = document.querySelector(".campoInValidoEmailRegis");


    if(correo.match(patron)){
        campoValidoEmailRegis.style.display = "block";
        campoInValidoEmailRegis.style.display ="none";
    }else{
        campoValidoEmailRegis.style.display = "none";

        if(emailInputRegis.value != ""){
        emailInputRegis.value = "Invalido";
        campoInValidoEmailRegis.style.display ="block";
        }else{
            campoInValidoEmailRegis.style.display ="none";
            
        }
    }
}

function resetEmailInput(){
    emailInputRegis.value = "";
}

function emailValidation(){
    showEmailPlaceholderRegis();
    checkEmail();
}
// [FIN]

// [START]Relacionado con mostrar y ocultar el placeholder de CONTRASEÑA en el SIGNUP.

let passPlaceholderRegis = document.querySelector(".passPlaceholderRegis");
let passInputRegis = document.getElementById("passRegis");

function hidePassPlaceholderRegis(){
    passPlaceholderRegis.style.display = "none";
}



function showPassPlaceholderRegis(){

    if(passInputRegis.value ==""){
        passPlaceholderRegis.style.display = "block";
    }
}

function checkPass(){
    let pass = passInputRegis.value;

    let campoValidoPassRegis = document.querySelector(".campoValidoPassRegis");
    let campoInValidoPassRegis = document.querySelector(".campoInValidoPassRegis");

    if(pass != ""){
        if(pass.length < 8){
            campoInValidoPassRegis.style.display = "block";
            campoValidoPassRegis.style.display = "none";
            alert("La contraseña debe contener más de 8 carácteres.")
        }
        else{
            campoValidoPassRegis.style.display = "block";
            campoInValidoPassRegis.style.display = "none";
       
        }
    }else{
        campoValidoPassRegis.style.display = "none";
        campoInValidoPassRegis.style.display = "none";
    }
}

function passValidation(){
    showPassPlaceholderRegis();
    checkPass();
}
// [FIN]