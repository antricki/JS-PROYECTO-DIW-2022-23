<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="../../node_modules/bootstrap/dist/css/bootstrap.css"
    />
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <?php
  $d = __DIR__;
  include "../code/php/route.php";
  include "../code/php/navbar.php";
  ?>

    <section class="text-center">
      <div class="col-sm-3 main-section">
        <div class="col-12 user-img" id="bloqueImg">
          <img
            src="../assets/images/pfpDefault2.png"
            alt=""
            class="img-fluid"
            id="imgUser"
          />
        </div>

        <div class="form-box login-form">
          <div class="form-title">
            <h2 class="fw-bold mb-3">Cónectate</h2>
          </div>
          <form class="col-12" id="formulario">
            <div class="form-group" id="user-group">
              <div class="userPlaceholderLogin dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/circle-user-solid.svg"
                    alt=""
                    class="userIcon"
                  />
                </div>

                <div class="tempText">
                  <span class="textoTemporal"> Correo electrónico </span>
                </div>
              </div>

              <input
                onclick="hideUserPlaceholderLogin()"
                onblur="emailLoginValidation()"
                id="emailLogin"
                type="email"
                placeholder=""
                class="form-control my-3 p-2"
              />
            </div>
            <div class="form-group" id="pass-group">
              <div class="passPlaceholderLogin dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/lock-solid.svg"
                    alt=""
                    class="passIcon"
                  />
                </div>

                <div class="tempText">
                  <span class="textoTemporal"> Contraseña </span>
                </div>
              </div>
              <input
                onclick="hidePassPlaceholderLogin()"
                onblur="showPassPlaceholderLogin()"
                id="passLogin"
                type="password"
                placeholder=""
                class="form-control my-3 p-2"
              />
            </div>

            <div class="row">
              <div class="col-5">
                <label for=""
                  ><input type="checkbox" name="" id="" />Recuérdame</label
                >
              </div>
              <div class="col-7">
                <a href="#" class="enlace" id="eRecover"
                  >¿Olvidaste la contraseña?</a
                >
              </div>
            </div>

            <div class="form-group">
              <button type="button" class="btn1 mt-3 mb-5" name="logInBtn">
                Login
              </button>
            </div>

            <br />

            <div class="secundario">
              <span>¿Todavía no estás registrado?</span>
              <a href="#" class="enlace" onclick="showRegis()" id="bSignup-show"
                >Regístrate aquí</a
              >
            </div>
          </form>
        </div>

        <div class="form-box recover-form" id="recover-form">
          <div class="form-title">
            <h2 class="fw-bold mb-3">Recupera tu contaseña</h2>
          </div>
          <form class="col-12" id="formulario">
            <div class="form-group" id="user-group">
              <div
                class="userPlaceholderRecover dummytext"
                id="userPlaceholderRecover"
              >
                <div class="tempIcon">
                  <img
                    src="../assets/icons/circle-user-solid.svg"
                    alt=""
                    class="userIcon"
                  />
                </div>

                <div class="tempText">
                  <span class="textoTemporal"> Correo electrónico </span>
                </div>
              </div>

              <input
                id="emailRecover"
                type="email"
                placeholder=""
                class="form-control my-3 p-2"
              />
            </div>

            <div class="form-group">
              <button type="button" class="btn1 mt-3 mb-5" name="logInBtn">
                Recuperar
              </button>
            </div>
            <span>¿Ya tienes cuenta?</span>
            <a href="#" class="enlace" onclick="showLogin()" id="bLogin-show"
              >Cónectate aquí</a
            >

            <br />

            <div class="secundario">
              <span>¿Todavía no estás registrado?</span>
              <a href="#" class="enlace" onclick="showRegis()" id="bSignup-show"
                >Regístrate aquí</a
              >
            </div>
          </form>
        </div>

        <div class="form-box registration-form">
          <div class="form-title">
            <h2 class="fw-bold mb-3">Crea tu cuenta</h2>
          </div>

          <form action="" class="col-12" id="formulario">
            <div class="form-group boxForm" id="user-group">
              <div class="userPlaceholderRegis dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/circle-user-solid.svg"
                    alt=""
                    class="userIcon"
                  />
                </div>

                <div class="tempText">
                  <span class="textoTemporal"> Usuario </span>
                </div>
              </div>

              <div class="campoValido campoValidoUserRegis dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/check-solid.svg"
                    alt=""
                    class="iconValido"
                  />
                </div>
              </div>
              <div class="campoInValido campoInValidoUserRegis dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/x-solid.svg"
                    alt=""
                    class="iconInValido"
                  />
                </div>
              </div>

              <input
                onclick="hideUserPlaceholderRegis()"
                onblur="userValidationRegis()"
                id="userRegis"
                type="text"
                placeholder=""
                class="form-control my-3 p-2"
                name="userRegis"
              />
            </div>
            <div class="form-group boxForm" id="user-group">
              <div class="emailPlaceholderRegis dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/envelope-solid.svg"
                    alt=""
                    class="emailIcon"
                  />
                </div>

                <div class="tempText">
                  <span class="textoTemporal"> Correo electrónico </span>
                </div>
              </div>

              <div class="campoValido campoValidoEmailRegis dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/check-solid.svg"
                    alt=""
                    class="iconValido"
                  />
                </div>
              </div>
              <div class="campoInValido campoInValidoEmailRegis dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/x-solid.svg"
                    alt=""
                    class="iconInValido"
                  />
                </div>
              </div>
              <input
                onclick="hideEmailPlaceholderRegis()"
                onblur="emailValidation()"
                id="emailRegis"
                type="email"
                placeholder=""
                class="emailRegis form-control my-3 p-2"
                name="emailRegis"
              />
            </div>

            <div class="form-group boxForm" id="pass-group">
              <div class="passPlaceholderRegis dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/lock-solid.svg"
                    alt=""
                    class="passIcon"
                  />
                </div>

                <div class="tempText">
                  <span class="textoTemporal"> Contraseña </span>
                </div>
              </div>
              <div class="campoValido campoValidoPassRegis dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/check-solid.svg"
                    alt=""
                    class="iconValido"
                  />
                </div>
              </div>
              <div class="campoInValido campoInValidoPassRegis dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/x-solid.svg"
                    alt=""
                    class="iconInValido"
                  />
                </div>
              </div>
              <input
                onclick="hidePassPlaceholderRegis()"
                onblur="passValidation()"
                id="passRegis"
                type="password"
                placeholder=""
                class="form-control my-3 p-2"
                name="passRegis"
              />
            </div>
            <div class="form-group boxForm" id="pass-group">
              <div class="passPlaceholderRegis2 dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/lock-solid.svg"
                    alt=""
                    class="passIcon"
                  />
                </div>

                <div class="tempText">
                  <span class="textoTemporal"> Confirmar Contraseña </span>
                </div>
              </div>
              <div class="campoValido campoValidoPassRegis dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/check-solid.svg"
                    alt=""
                    class="iconValido"
                  />
                </div>
              </div>
              <div class="campoInValido campoInValidoPassRegis dummytext">
                <div class="tempIcon">
                  <img
                    src="../assets/icons/x-solid.svg"
                    alt=""
                    class="iconInValido"
                  />
                </div>
              </div>
              <input
                id="passRegis2"
                type="password"
                placeholder=""
                class="form-control my-3 p-2"
                name="passRegis2"
              />
            </div>
            <div class="form-group">
              <button type="button" class="btn1 mt-3 mb-5" name="signUpBtn">
                Sign up
              </button>
            </div>

            <span>¿Ya tienes cuenta?</span>
            <a href="#" class="enlace" onclick="showLogin()" id="bLogin-show"
              >Cónectate aquí</a
            >
            <br />

            <div class="secundario">
              <p>
                Al registrarte aceptas nuestra
                <a href="#" class="enlace">política de privacidad</a> y
                <a href="#" class="enlace">política de cookies</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </section>
    <br />

    <script src="login.js"></script>

    <?php
  include "../code/php/footer.php";
  ?>
  </body>
</html>
