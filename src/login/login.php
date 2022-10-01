<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script> 
    <link rel="stylesheet" href="login.css">
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
                <img src="../assets/images/pfpDefault2.png" alt="" class="img-fluid" id="imgUser">
            </div>

            <div class="form-box login-form">
                <div class="form-title">
                    <h2 class="fw-bold mb-3">Cónectate</h2>
                </div>
                <form class="col-12" id="formulario">
                    <div class="form-group" id="user-group">
                        
                        <div class="userPlaceholder">
                            <div class="tempIcon">
                                <img src="../assets/icons/circle-user-solid.svg" alt="" class="userIcon">
                            </div>

                            <div class="tempText">                        
                                <span class="textoTemporal">
                                    Correo electrónico o usuario
                                </span>
                            </div>
                        </div>

                            <input onclick="hideUserPlaceholder()" onblur="showUserPlaceholder()" id= "user" type="email" placeholder="" class="form-control my-3 p-2">
                    </div>
                    <div class="form-group" id="pass-group">
                        <div class="passPlaceholder">
                            <div class="tempIcon">
                                <img src="../assets/icons/lock-solid.svg" alt="" class="passIcon">
                            </div>

                            <div class="tempText">                        
                                <span class="textoTemporal">
                                    Contraseña
                                </span>

                        </div>
                    </div>
                            <input onclick="hidePassPlaceholder()" onblur="showPassPlaceholder()" id ="pass" type="password" placeholder="" class="form-control my-3 p-2">
                    </div>
                    
                    <div class="row">
                    <div class="col-4">
                      <label for=""><input type="checkbox" name="" id="">Recuérdame</label>  
                    </div>
                    <div class="col-8">
                        <a href="#">¿Olvidaste la contraseña?</a>
                    </div>
                    </div>

                    <div class="form-group">
                            <button type="button" class="btn1 mt-3 mb-5">Login</button>
                    </div>
                    
                    <br>

                    <div class="secundario">
                    <span>¿Todavía no estás registrado?</span> <a href="#" onclick ="showRegis()" id="bSignup-show">Regístrate aquí</a> 
                    </div>

                </form>
            </div>
            
            <div class="form-box registration-form">
                <div class="form-title">
                    <h2 class="fw-bold mb-3">Crea tu cuenta</h2>
                </div>

                <form action="" class="col-12" id="formulario">
                    <div class="form-group" id="user-group">
                        <div class="userPlaceholder">
                                <div class="tempIcon">
                                    <img src="../assets/icons/circle-user-solid.svg" alt="" class="userIcon">
                                </div>

                                <div class="tempText">                        
                                    <span class="textoTemporal">
                                        usuario
                                    </span>
                                </div>
                        </div>

                        <input onclick="hideUserPlaceholder()" onblur="showUserPlaceholder()" id= "user" type="text" placeholder="" class="form-control my-3 p-2">
                        
                    </div>
                    <div class="form-group" id="user-group">
                        <input  type="email" placeholder="amoliner@gmail.com" class="form-control my-3 p-2">
                    </div>
                    <div class="form-group" id="pass-group">
                        <input type="password" placeholder="***********" class="form-control my-3 p-2">
                    </div>          
                    <div class="form-group">
                        <button type="button" class="btn1 mt-3 mb-5">Sign up</button>
                    </div>
                
                <span>¿Ya tienes cuenta?</span> <a href="#" onclick ="showLogin()" id="bLogin-show">Cónectate aquí</a>
                <br>
                

                <div class="secundario">
                <p>Al registrarte aceptas nuestra <a href="#">política de privacidad</a> y <a href="#">política de cookies</a> </p>
                </div>

                </form>
            </div>
        
    </div>
</section>
<br>

<script src="login.js"></script>
 
<?php
  include "../code/php/footer.php";
  ?>
</body>
</html>