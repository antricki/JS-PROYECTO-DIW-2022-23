let loginForm = document.querySelector('.login-form')
let regisForm = document.querySelector('.registration-form')

function showRegis() {
  loginForm.style.display = 'none'
  regisForm.style.display = 'block'
  recoverForm.style.display = 'none'
}

function showLogin() {
  regisForm.style.display = 'none'
  loginForm.style.display = 'block'
  recoverForm.style.display = 'none'
}

let recoverForm = document.getElementById('recover-form')
let eRecover = document.getElementById('eRecover')

eRecover.addEventListener('click', event => {
  regisForm.style.display = 'none'
  loginForm.style.display = 'none'
  recoverForm.style.display = 'block'
})

// [START]Relacionado con mostrar y ocultar el placeholder de USUARIO en el LOGIN.
let userPlaceholderLogin = document.querySelector('.userPlaceholderLogin')
let userInputLogin = document.getElementById('emailLogin')

function hideUserPlaceholderLogin() {
  userPlaceholderLogin.style.display = 'none'
}

function showUserPlaceholderLogin() {
  if (userInputLogin.value == '') {
    userPlaceholderLogin.style.display = 'block'
  }
}

// [FIN]

// [START]Relacionado con mostrar y ocultar el placeholder de CONTRASEÑA en el LOGIN.
let passPlaceholderLogin = document.querySelector('.passPlaceholderLogin')
let passInputLogin = document.getElementById('passLogin')

function hidePassPlaceholderLogin() {
  passPlaceholderLogin.style.display = 'none'
}

function showPassPlaceholderLogin() {
  if (passInputLogin.value == '') {
    passPlaceholderLogin.style.display = 'block'
  }
}
// [FIN]

// [START]Relacionado con mostrar y ocultar el placeholder de USUARIO en el SIGNUP.
let userPlaceholderRegis = document.querySelector('.userPlaceholderRegis')
let userInputRegis = document.getElementById('userRegis')
let campoValidoUserRegis = document.querySelector('.campoValidoUserRegis')
let campoInValidoUserRegis = document.querySelector('.campoInValidoUserRegis')

function hideUserPlaceholderRegis() {
  userPlaceholderRegis.style.display = 'none'
  userInputRegis.value = ''
  campoInValidoUserRegis.style.display = 'none'
  campoValidoUserRegis.style.display = 'none'
}

function showUserPlaceholderRegis() {
  if (userInputRegis.value == '') {
    userPlaceholderRegis.style.display = 'block'
    campoInValidoUserRegis.style.display = 'none'
    campoValidoUserRegis.style.display = 'none'
  }
}

function checkUserRegis() {
  let user = userInputRegis.value

  if (user != '') {
    if (user.length < 6) {
      campoValidoUserRegis.style.display = 'none'
      campoInValidoUserRegis.style.display = 'block'
      alert('El nombre de usuario debe contener 6 o más carácteres.')
      userInputRegis.value = 'Invalido'
      campoInValidoUserRegis.style.display = 'block'
    } else if (user != 'Invalido') {
      campoValidoUserRegis.style.display = 'block'
      campoInValidoUserRegis.style.display = 'none'
    }
  } else {
    campoValidoUserRegis.style.display = 'none'
    campoInValidoUserRegis.style.display = 'none'
  }
}

function userValidationRegis() {
  showUserPlaceholderRegis()
  checkUserRegis()
}
// [FIN]

// [START]Relacionado con mostrar y ocultar el placeholder de EMAIL en el SIGNUP.
let emailPlaceholderRegis = document.querySelector('.emailPlaceholderRegis')
let emailInputRegis = document.getElementById('emailRegis')
let emailInputLogin = document.getElementById('emailLogin')

function hideEmailPlaceholderRegis() {
  emailPlaceholderRegis.style.display = 'none'
  emailInputRegis.value = ''
}

function showEmailPlaceholderRegis() {
  if (emailInputRegis.value == '') {
    emailPlaceholderRegis.style.display = 'block'
  }
}

function checkEmailRegis() {
  let correoRegis = emailInputRegis.value
  const patron =
    /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i
  let campoValidoEmailRegis = document.querySelector('.campoValidoEmailRegis')
  let campoInValidoEmailRegis = document.querySelector(
    '.campoInValidoEmailRegis'
  )

  if (correoRegis.match(patron)) {
    campoValidoEmailRegis.style.display = 'block'
    campoInValidoEmailRegis.style.display = 'none'
  } else {
    campoValidoEmailRegis.style.display = 'none'

    if (emailInputRegis.value != '') {
      emailInputRegis.value = 'Invalido'
      campoInValidoEmailRegis.style.display = 'block'
    } else {
      campoInValidoEmailRegis.style.display = 'none'
    }
  }
}

function checkEmailLogin() {
  let correoLogin = emailInputLogin.value
  const patron =
    /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i

  if (!correoLogin.match(patron) && correoLogin != '') {
    emailInputLogin.value = ''
    alert('Introduzca un correo electrónico válido')
  }
}
function emailLoginValidation() {
  checkEmailLogin()
  showUserPlaceholderLogin()
}

function resetEmailInput() {
  emailInputRegis.value = ''
}

function emailValidation() {
  showEmailPlaceholderRegis()
  checkEmailRegis()
}
// [FIN]

// [START]Relacionado con mostrar y ocultar el placeholder de CONTRASEÑA en el SIGNUP.

let passPlaceholderRegis = document.querySelector('.passPlaceholderRegis')
let passInputRegis = document.getElementById('passRegis')

function hidePassPlaceholderRegis() {
  passPlaceholderRegis.style.display = 'none'
  passInputRegis.value = ''
  campoInValidoPassRegis.style.display = 'none'
  campoValidoPassRegis.style.display = 'none'
}

function showPassPlaceholderRegis() {
  if (passInputRegis.value == '') {
    passPlaceholderRegis.style.display = 'block'
  }
}

function checkPassRegis() {
  let pass = passInputRegis.value

  let campoValidoPassRegis = document.querySelector('.campoValidoPassRegis')
  let campoInValidoPassRegis = document.querySelector('.campoInValidoPassRegis')

  if (pass != '') {
    if (pass.length < 8) {
      campoInValidoPassRegis.style.display = 'block'
      campoValidoPassRegis.style.display = 'none'
      alert('La contraseña debe contener 8 o más carácteres.')
    } else {
      campoValidoPassRegis.style.display = 'block'
      campoInValidoPassRegis.style.display = 'none'
    }
  } else {
    campoValidoPassRegis.style.display = 'none'
    campoInValidoPassRegis.style.display = 'none'
  }
}

function passValidation() {
  showPassPlaceholderRegis()
  checkPassRegis()
}
// [FIN]

let userPlaceholderRecover = document.getElementById('userPlaceholderRecover')
let userInputRecover = document.getElementById('emailRecover')

function checkEmailRecover() {
  let correoRecover = userInputRecover.value
  const patron =
    /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i

  if (!correoRecover.match(patron) && correoRecover != '') {
    userInputRecover.value = ''
    alert('Introduzca un correo electrónico válido')
  }
}

userInputRecover.addEventListener('focus', event => {
  userPlaceholderRecover.style.display = 'none'
})
userInputRecover.addEventListener('blur', event => {
  checkEmailRecover()
  userPlaceholderRecover.style.display = 'block'
})
// userInputRecover.addEventListener('blur', showUserPlaceholderRecover())
