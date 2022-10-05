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
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css"/>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="politicas.css">
</head>
<body>
    <!--• Gris : #EBEBEB  un 60% de la página, el fondo y lo menos important.
    • Naranja: #F5A25D un 10% para aquello que llama a la acción.
    • Rojo: #FA7F72 solo para pequeños detalles o pequeños bloques de texto
    • Azul: #389393 para el footer 
    https://www.shutterstock.com/es/create/home para crear imagenes-->
    <?php
        $d=__DIR__;
        include "../code/php/route.php";
        include "../code/php/navbar.php";
    ?>

    <main class="informacion">
    <hr class="raya"/>
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
        <hr class="raya"/>
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
                        <p> Las devoluciones pueden tramitarse a través de nuestro sitio web Estado del pedido en un simple paso.
                        Las devoluciones están sujetas a la Política de ventas y reembolsos de Apple. Si cambias de opinión, puedes devolvernos tu equipo estándar en un plazo de 
                        14 días naturales a partir de la fecha de entrega. Las devoluciones de software también se aceptan en este periodo, pero solo si el software no ha sido desprecintado. Está opción se suma a tus derechos legales como consumidor en cuanto a la devolución de productos defectuosos. Haz clic aquí para obtener más información, y lee también el apartado «¿Qué ocurre si recibo un artículo defectuoso?» que aparece a continuación.
                        Si deseas devolver el pedido o algunos de los artículos, utiliza nuestra página web de contacto con nosotros. Deberás facilitarnos los siguientes datos:
                        N.º de pedido web
                        La dirección completa en la que podemos recoger los artículos
                        Un número de teléfono de contacto
                        La hora a la que prefieres que pase el transportista
                        Cuando recibamos tu correo electrónico, te facilitaremos un número de autorización para la recogida de material (RMA). 
                        Indica claramente este número en el embalaje de los artículos que vas a devolver para agilizar el procesamiento de la devolución.</p>
                    </p>
                </div>
                
            </div>
        </div>
        <hr class="raya"/>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col col-4  align-self-start">
                        <h2 class="title" id="reembolsos">Reembolsos</h2>
                    </div>
                    <div class="col col-4">
                        <p class="text">Cuando recibimos tu artículo, se tramita un reembolso inmediatamente. Si has cancelado un artículo de recogida y ya te lo hemos facturado, 
                        tramitamos un reembolso en cuantoenvías tu solicitud de cancelación. La forma de procesar el reembolso depende del método de pago empleado:
                        Si has pagado con tarjeta de crédito o débito, el reembolso se remite a la entidad emisora de la tarjeta en un plazo de cinco días laborables a partir de la recepción 
                        del artículo devuelto o de la solicitud de cancelación. Para saber cuándo   se abonará el crédito a tu cuenta, ponte en contacto con la entidad emisora de la tarjeta.
                        Los productos adquiridos en apple.com con una Apple Gift Card se te reembolsan mediante una Apple Gift Card por email. 
                        Si prefieres que te enviemos una Apple Gift Card por correo, pídeselo al representante que te está ayudando.</p>
                        <h3>Cambiar un artículo</h3>
                        <p>Si has comprado un artículo en un Apple Store, puedes cambiarlo en cualquier Apple Store del mismo país. 
                         Los cambios de artículos están sujetos a la disponibilidad del producto en la tienda. Conviene comprobar la disponibilidad llamando al 900 521 321
                        o buscando el producto en el Apple Online Store para ver si está disponible para su recogida por la zona. Es posible que los artículos personalizados y los Mac configurados a medida no sean válidos para cambios en un Apple Store.
                         Los artículos comprados en el Apple Online Store que lleguen dañados o sean incorrectos se pueden devolver en cualquier Apple Store del mismo país o a través de Atención al Cliente.</p>
                    </div>
                </div>

            </div>
        <hr class="raya"/>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col col-4 align-self-start">
                    <h2 class="title" id="tardar">¿Cuánto tardarán en procesar el reembolso?</h2>
                </div>
                <div class="col col-4">
                    <p class="text">Procesaremos la devolución una vez los artículos hayan regresado a los almacenes de Apple. La transferencia tardará de 5 a 7 días en hacerse efectiva.</p>
                </div>
            </div>
        
          
        </div>
        <hr class="raya"/>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col col-4 align-self-start">
                    <h2 class="title" id="defectuoso">¿Qué ocurre si recibo un aartículo defectuoso?</h2>
                </div>
                <div class="col col-4">
                    <p class="text">Si tienes algún problema con tu nuevo producto de Apple o crees que presenta algún defecto, llama a AppleCare lo antes posible para informarnos. 
                    Si el problema o el defecto es con productos de otros fabricantes, 
                    llama al servicio de atención al cliente del Apple Online Store lo antes posible para informarnos</p>
                </div>
            </div>


        </div>
        <hr class="raya"/>
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
        <hr class="raya"/>
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

        <hr class="raya"/>
    </main>

    <?php
    include "../code/php/footer.php";
    ?>
    <script src="politicas.js"></script>
</body>
</html>