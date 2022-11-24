<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Políticas de Entrega</title>
    <!-- fuente -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600;700&family=League+Spartan:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- fin fuente -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css" />
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="./code/css/politicas.css">
</head>

<body>
    <!--
    • Gris : #EBEBEB  un 60% de la página, el fondo y lo menos important.
    • Naranja: #F5A25D un 10% para aquello que llama a la acción.
    • Rojo: #FA7F72 solo para pequeños detalles o pequeños bloques de texto
    • Azul: #389393 para el footer 
    https://www.shutterstock.com/es/create/home para crear imagenes
    -->
    <?php
    $d = __DIR__;
    include "../code/php/route.php";
    include "../code/php/navbar_store.php";
    ?>

    <main class="informacion">
        <hr class="raya" />
        <div class="container-fluid lista">
            <div class="row lista__row justify-content-center">
                <div class="col col-4 lista__col align-self-start">
                    <h1 class="lista__title-1">Devoluciones y reembolsos</h1>
                </div>
                <div class="col col-4">
                    <p class="title_lista">Elige un tema:</p>
                    <ul class="lista__preguntas">
                        <li><a href="#devolver" class="lista__preguntas-link">¿Cómo puedo devolver un artículo?</a></li>
                        <li><a href="#reembolsos" class="lista__preguntas-link">Reembolsos</a></li>
                        <li><a href="#tardar" class="lista__preguntas-link">¿Cuánto tardarán en procesar el reembolso?</a></li>
                        <li><a href="#defectuoso" class="lista__preguntas-link">¿Qué ocurre si recibo un artículo defectuoso?</a></li>
                        <li><a href="#factura" class="lista__preguntas-link">¿Mi factura no se envía junto con el pedido?</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="raya" />
        <div class="container-fluid">
            <div class="row preguntas__soluciones justify-content-center">
                <div class="col col-4 col__text align-self-start">
                    <h2 class="title" id="devolver">¿Cómo puedo devolver un artículo?</h2>
                </div>
                <div class="col col-4 col__text">
                    <p class="text">
                    <h3>Política de devoluciones en los lugares de recogida</h3>
                    <p>Las devoluciones se pueden dejar en cualquier lugar de recogida una vez imprimida la etiqueta de devolución desde el sitio web de autoservicio.
                        Pega la etiqueta en el paquete y llévalo al lugar de recogida que mejor te venga en un plazo de cinco días.</p>
                    <h3>Política estándar de devoluciones</h3>
                    <p>Dispones de 365 días, desde el momento de la recepción de tu pedido para solicitar la devolución. Una vez revisado el producto realizaremos el reembolso del importe</p>
                    </p>
                </div>

            </div>
        </div>
        <hr class="raya" />
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col col-4  align-self-start">
                    <h2 class="title" id="reembolsos">Reembolsos</h2>
                </div>
                <div class="col col-4">
                    <p class="text">Cuando recibimos tu artículo, se tramita un reembolso inmediatamente. Si has cancelado un artículo de recogida y ya te lo hemos facturado,
                        tramitamos un reembolso en cuantoenvías tu solicitud de cancelación. La forma de procesar el reembolso depende del método de pago empleado:
                        Si has pagado con tarjeta de crédito o débito, el reembolso se remite a la entidad emisora de la tarjeta en un plazo de cinco días laborables a partir de la recepción
                        del artículo devuelto o de la solicitud de cancelación. Para saber cuándo se abonará el crédito a tu cuenta, ponte en contacto con la entidad emisora de la tarjeta.</p>
                </div>
            </div>

        </div>
        <hr class="raya" />
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col col-4 align-self-start">
                    <h2 class="title" id="tardar">¿Cuánto tardarán en procesar el reembolso?</h2>
                </div>
                <div class="col col-4">
                    <p class="text">Procesaremos la devolución una vez los artículos hayan regresado a nuestros almacenes. La transferencia tardará de 5 a 7 días en hacerse efectiva.</p>
                </div>
            </div>


        </div>
        <hr class="raya" />
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col col-4 align-self-start">
                    <h2 class="title" id="defectuoso">¿Qué ocurre si recibo un artículo defectuoso?</h2>
                </div>
                <div class="col col-4">
                    <p class="text">Si tienes algún problema con tu nuevo producto o crees que presenta algún defecto, llama a <span class="tlf_defectuoso">687 123 788</span> lo antes posible para informarnos.
                        Si el problema o el defecto es con productos de otros fabricantes,
                        llama al servicio de atención al cliente de nuestra tienda online lo antes posible para informarnos</p>
                </div>
            </div>


        </div>
        <hr class="raya" />
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col col-4 align-self-start">
                    <h2 class="title" id="factura">¿Mi factura no se envía junto con el pedido?</h2>
                </div>
                <div class="col col-4">
                    <p class="text">Recibirás la factura por email entre dos y tres días después de que te enviemos el pedido.
                        Si no recibes esta factura o si necesitas una copia extra para tu archivo, podrás imprimir la factura en nuestra página web de autoservicio.
                        Si tienes alguna otra duda acerca del IVA, haz clic aquí.</p>
                </div>
            </div>
        </div>
        <hr class="raya" />
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col d-flex justify-content-center">
                    <form action="#" method="post">
                        <div id="buttons_hidden">
                            <label for="">¿Te ha resultado útil?</label>
                            <input type="button" class="btn btn-warning boton_hidden" value="Sí"></input>
                            <input type="button" class="btn btn-warning boton_hidden" value="No"></input>
                        </div>
                        <div id="text_area" class="mb-3 div_hidden div_hidden-css">
                            <label for="" class="form-label">Gracias por informarnos.</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="¿Qué podemos hacer para que este artículo resulte más útil? (Opcional)"></textarea>
                            <label for="" class="form-label">Recuerda que no debes incluir ningún dato personal en tus comentarios.</label>
                            <input type="button" class="btn btn-warning boton_hidden" value="Enviar" id="enviar"></input>
                        </div>
                        <div class="text_thanks div_hidden" id="text_thanks">
                            <p>Gracias por tus comentarios.</p>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <hr class="raya" />
    </main>

    <?php
    include "../code/php/footer.php";
    ?>
    <script src="./code/js/politicas.js"></script>
</body>

</html>