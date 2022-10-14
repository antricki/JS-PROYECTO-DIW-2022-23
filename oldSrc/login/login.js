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
    campoInValido.style.display ="none";
    campoValido.style.display ="none";
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
    let campoValido = document.querySelector(".campoValido");
    let campoInValido = document.querySelector(".campoInValido");


    if(correo.match(patron)){
        campoValido.style.display = "block";
        campoInValido.style.display ="none";
    }else{
        campoValido.style.display = "none";

        if(emailInputRegis.value != ""){
        emailInputRegis.value = "Invalido";
        campoInValido.style.display ="block";
        }else{
            campoInValido.style.display ="none";
            
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
// [FIN]