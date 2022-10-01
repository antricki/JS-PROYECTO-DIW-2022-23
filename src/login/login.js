let loginForm = document.querySelector(".login-form");
let regisForm = document.querySelector(".registration-form")

function showRegis() {
    loginForm.style.display = "none";
    regisForm.style.display = "block";
}

function showLogin() {
    regisForm.style.display = "none";
    loginForm.style.display = "block";
}

let userPlaceholder = document.querySelector(".userPlaceholder");

function hideUserPlaceholder(){
    userPlaceholder.style.display = "none";
}

let userInput = document.getElementById("user");

function showUserPlaceholder(){

    if(userInput.value == ""){
    userPlaceholder.style.display = "block";
    }
    
}

let passPlaceholder = document.querySelector(".passPlaceholder");

function hidePassPlaceholder(){
    passPlaceholder.style.display = "none";
}

let passInput = document.getElementById("pass");

function showPassPlaceholder(){

    if(passInput.value ==""){
        passPlaceholder.style.display = "block";
    }
}

