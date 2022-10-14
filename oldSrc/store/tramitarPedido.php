<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tramitar pedido</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600;700&family=League+Spartan:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<!--• Gris : #EBEBEB  un 60% de la página, el fondo y lo menos important.
    • Naranja: #F5A25D un 10% para aquello que llama a la acción.
    • Rojo: #FA7F72 solo para pequeños detalles o pequeños bloques de texto
    • Azul: #389393 para el footer 
    https://www.shutterstock.com/es/create/home para crear imagenes-->
<body class="body__tramitar_pedido">
    <header>
    <!-- navegador -->
    <?php
        $d=__DIR__;
        include "../code/php/route.php";
        include "../code/php/navbar_store.php";
    ?>

    <!-- banner -->
    <section class="hero-banner banner py-3">
        <div class="container-fluid">
            <div class="row row align-items-center">
                <div class="col banner__title">
                    <h1 class="mt-3">Tramitar pedido</h1>
                </div>
            </div>
        </div>
    </section>
    </header>
    <!-- Pago y envío. MAIN ES EL CONTENEDOR PRINCIPAL-->
    <main class="main__tramitar__pedido container-fluid">
        <div class="row d-flex justify-content-evenly">

            <div class="col-lg-4 col-sm-2 contenedor__datos">

                <!-- primera fila DATOS DE CONTACTO Y ENVÍO-->
                <div class="row d-flex flex-column g-5">
                    <div class="col datos__contacto-envío p-4">
                        <!-- titulo -->
                        <div class="contacto__direccion-title">
                            <img src="products/icons/person.svg" alt="" class="contacto__direccion-icon">
                            <h3 class="contacto__direccion-title__text">Datos de contacto</h3>
                        </div>
                        <!-- cuerpo / primer formulario-->
                        <div class="contacto__direccion-body">
                            <form action="#" method="post" id="form_inicial">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Apellidos" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Télefono" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Calle" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ciudad" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Código Postal" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="País">
                                </div>
                            </form>
                        </div>
                            <!-- segundo formulario -->
                        <div class="custom-control custom-checkbox">
                            <div class="container_checkbox">
                                <input type="checkbox" class="custom-control-input check_form" id="checkbox" value="" onclick="ocultaForm()">
                                <label for="misma-direccion" class="custom-control-label" id="datos_facturacion_envio">Los datos de facturación y envío son los mismos.</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="guardar-informacion">
                                <label for="guardar-informacion" class="custom-control-label">Guardar informacion para la siguiente compra</label>
                            </div>
                            <!-- formulario de faturacion que se ve y hago click desaparece -->
                            <div id="datos_facturacion_ver" class="datos_facturacion_ver">
                                <h3 class="contacto__direccion-title__text">Datos de envío</h3>
                                <form action="#" method="post" class="datos_facturacion_envio" >
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre" required>
                                      </div>
                                      <div class="mb-3">
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Apellidos" required>
                                      </div>
                                      <div class="mb-3">
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Télefono" required>
                                      </div>
                                      <div class="mb-3">
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Calle" required>
                                      </div>
                                      <div class="mb-3">
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ciudad" required>
                                      </div>
                                      <div class="mb-3">
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Código Postal" required>
                                      </div>
                                      <div class="mb-3">
                                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="País">
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- FIN DE CONTACTO -->
                    <!-- Método de envío -->
                    <div class="col metodo__envio p-4">
                        <div class="row d-flex flex-column">
                            <!-- título -->
                            <div class="col">
                                <div class="contacto__direccion-title">
                                    <img src="products/icons/truck.svg" alt="" class="contacto__direccion-icon">
                                    <h3 class="contacto__direccion-title__text">Método de envío</h3>
                                </div>
                            </div>
                            <!-- cuerpo -->
                            <div class="col tipo__entrega1 metodo__envio-entregas" id="tipo__entrega1">
                                <div class="form-check_input">
                                    <input class="form-check-label check_entrega1" type="radio" name="flexRadioDefault" id="flexRadioDefault1 check_entrega1">
                                    <label for="flexRadioDefault1" class="form-check-label">Entrega a domicilio</label>
                                </div>
                                <div class="form-check_input">
                                    <img src="products/icons/GLS.png" alt="" class="contacto__envio-pago__img">
                                </div>
                                <div class="contacto__pago-envio__text">
                                    <p>Recibirás tu pedido durante las 24hrs siguientes a la realizacion de tu pedido. Sujeto a modificaciones.</p>  
                                </div>
                            </div>
                            <div class="col metodo__envio-entregas" id="tipo__entrega2">
                                <div class="form-check_input">
                                    <input class="form-check-label check_entrega2" type="radio" name="flexRadioDefault" id="flexRadioDefault2 check_entrega2">
                                    <label for="flexRadioDefault2" class="form-check-label">Punto de recogida</label>
                                </div>
                                <div class="form-check_img">
                                    <img src="products/icons/inpost-seeklogo.com.png" alt="" class="contacto__envio-pago__img">
                                </div>
                                <div class="contacto__pago-envio__text">
                                    <p>Recibirás tu pedido en el punto de recogida indicado durante las 24hrs siguientes a la realizacion de tu pedido.</p>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FIN DE MÉTODO DE ENVÍO -->
                    <!-- método de pago -->
                    <div class="col metodo__pago p-4">
                        <!-- titulo -->
                        <div class="contacto__direccion-title contacto__pago-title">
                            <img src="products/icons/credit-card.svg" alt="" class="contacto__direccion-icon">
                            <h3 class="contacto__direccion-title__text">Método de pago</h3>
                        </div>
                        <!-- formulario de pago, cuerpo -->
                        <div class="contacto__pago-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre y apellidos" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="0000 0000 0000 0000" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="MM/AA" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="123" required>
                            </div>
                            <!-- mensaje de información, alerta -->
                            <div class="mb-3">
                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="El Código de Seguridad de la Tarjeta (CVC/CVV) es un código de seguridad adicional de cuatro o tres dígitos que está impreso (no grabado) en la parte delantera o trasera de tu tarjeta. El Código CVC/CVV/CID es una medida extra de seguridad para asegurar que esta tarjeta te pertenece.">¿Qué es CVC/CVV?</a>
                            </div>
                        </div>
                    </div>
                    <!-- fin método de pago -->
                </div> 
            </div>  <!-- FIN PRIMERA SECCIÓN -->             
            <!-- iNICIO DE SEGUNDA SECCIÓN (ASIDE) Resumen pedido-->
            <div class="col-lg-4 col-sm-2 contenedor__resumen"> 
                <div class="row">
                    <div class="col">
                        <!-- titulo -->
                        <div class="contacto__direccion-title contacto__pago-title">
                            <img src="products/icons/carrito2.png" alt="carrito compra"  class="contacto__direccion-icon">
                            <h3 class="contacto__direccion-title__text">Resumen del pedido</h3>
                        </div>
                        <!-- cuerpo -->
                        <div class="pedido_subtotal">
                            <label for="">Subtotal</label>
                            <label for="">50.98 €</label>
                        </div>
                        <div class="pedido_gastos-envio">
                            <label for="">Gastos de envío</label>
                            <label for="">Gratis</label>
                        </div>
                        <hr class="raya_tramitar-pedido"/>
                        <div class="pedido_total">
                            <label for="">Total</label>
                            <label for="">50.98 €</label>
                        </div>
                        <hr class="raya_tramitar-pedido"/>
                        <p class="pedido_total-pie">Precios con IVA incluido</p>
                        <p class="tramitar__pedido-text">Haciendo click en "Realizar pedido" confirma que ha leído y comprendido las <a href="">condiciones generales</a> de contratación publicadas que regulan la compra de los productos adquiridos así como la <a href="">política de privacidad</a> sobre el tratamiento de sus datos</p>
                        <div class="tramitar__pedido_btn">
                            <input type="submit" value="Realizar pedido" id="tramitar__pedido_btn" class="tramitar__pedido-btn" onclick="location.href='pedidoCompletado.php'">
                        </div>
                        <div class="tramitar__pedido_compraSegura">
                            <img src="products/icons/comprasegura.png" alt="" class="img_tramitar__pedido_icon">
                            <label for="">Compra segura 100% garantizada</label>
                        </div>
                    </div>
                </div>
            </div> <!-- FIN SEGUNDA SECCION (ASIDE) -->  
        </div>  <!-- fin row -->    
    </main> <!-- FIN pago y envío -->
    
    <!-- prefooter -->
    <div class="row pre-footer container-fluid">
      <div class="col">
        <div class="pre_footer__card">
          <img src="products/camion-de-reparto.png" class="card-img-top pre-footer_img" alt="...">
          <div class="card-body pre-footer__body">
            <h5 class="card-title pre-footer__title">Envío gratis con 2 o más artículos</h5>
            <p class="card-text">Da igual lo que compres, con solo 2 artículos en tu pedido, envío gratis :)</p>
            <a href="politicas.php" class="pre_footer__card-link">Leer más</a>
          </div>
        </div>

      </div>
      <div class="col">
        <div class="pre_footer__card">
          <img src="products/reloj-de-pared.png" class="card-img-top pre-footer_img" alt="...">
          <div class="card-body pre-footer__body">
            <h5 class="card-title pre-footer__title">Tu pedido en tu casa en 24h</h5>
            <p class="card-text">Envío express con entrega al día siguiente si compras de lunes a jueves antes de las 17:00 (solo península)</p>
            <a href="politicas.php" class="pre_footer__card-link">Leer más</a>
          </div>
        </div>

      </div>
      <div class="col">
        <div class="pre_footer__card">
          <img src="products/regreso.png" class="card-img-top pre-footer_img" alt="...">
          <div class="card-body pre-footer__body">
            <h5 class="card-title pre-footer__title">Devoluciones</h5>
            <p class="card-text">60 días para efectuar cambios o devoluciones. ¡Sin preguntas!</p>
            <a href="politicas.php" class="pre_footer__card-link">Leer más</a>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <?php
    include "../code/php/footer.php";
    ?>
    <!-- ENLACE PARA EL JS -->
    <script src="js/tramitarPedido.js"></script>
</body>
</html>