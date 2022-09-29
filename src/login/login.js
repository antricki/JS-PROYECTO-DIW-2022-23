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