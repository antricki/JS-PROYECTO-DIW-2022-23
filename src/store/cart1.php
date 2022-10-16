<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600;700&family=League+Spartan:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="./js/cart1.js"></script>
    <link rel="stylesheet" href="./css/cart1.css">
</head>

<body>
    <!--Nav-->
    <?php
    $d = __DIR__;
    include "../code/php/route.php";
    include "../code/php/navbar_store.php";


    

    if (isset($_POST['añadir'])) {
        $name = !empty($_POST['nombre']) ? $_POST['nombre'] : null;
        echo"<script type='text/javascript'>
        alert(".$name .");
        </script>";
    }

    ?>


    <section class="container">
        <div class="row">
            <!--Productos cesta-->
            <div class="col-lg-8 col-xs-12">
                <h2>Cesta</h2>
                <div class="row-rev">
                    <p id="precioIzquierda">Precio</p>
                </div>
                <hr style="color:#fa7f72;">
                <!--producto 1-->
                <div class="row" id="producto1">
                    <div class="col-3" id="imgChek">
                        <div class="form-check">
                            <input class="form-check-input" checked onclick="contarProductos()" type="checkbox" value="" id="checkarticulo">
                        </div>
                        <img src="products/pen.jpg" class="imagen" alt="">
                    </div>
                    <div class="col-7" id="texto">
                        <h2>Pen de gran programador</h2>
                        <p> <span class="enStock">En Stock </span> <br>
                            <b> Tamaño:</b>S<!-- <?= $name ?> --><br>
                            <b> Color:</b> Verde <br>
                            <select class="form-contol cantidades" onchange="cantidades(this.id)" id="cantidades1" aria-label=" select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <input class="eliminar" type="submit" onclick="lanzar('producto1','enlace1')" name="eliminar" value="Eliminar">
                        </p>
                    </div>
                    <div class="col-2" id="contenedorprecio">
                    <p class="precio"> <span class="precio">8.99</span>€</p>
                    </div>
                    <hr style="color:#FA7F72;">
                </div>
                <!--enlace 1-->
                <div class="row-fluid" id="enlace1" style="display:none;">
                    <a href="store2.php">Pen de programador</a>
                    <hr style="color:#FA7F72;">
                </div>
                <!--producto 2-->
                <div class="row" id="producto2">
                    <div class="col-3" id="imgChek">
                        <div class="form-check">
                            <input class="form-check-input" onclick="contarProductos()" checked type="checkbox" value="" id="checkarticulo">
                        </div>
                        <img src="products/alfombrilla.jpg" class="imagen" alt="">
                    </div>
                    <div class="col-7" id="texto">
                        <h2>Alfombrilla de programador</h2>
                        <p> <span class="enStock">En Stock </span> <br>
                            <b> Tamaño:</b> M <br>
                            <b> Color:</b> Rojo <br>
                            <select class="form-contol cantidades" id="cantidades2" onchange="cantidades(this.id)" aria-label=" select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <input class="eliminar" type="button" onclick="lanzar('producto2','enlace2')" name="eliminar" value="Eliminar">
                        </p>
                    </div>
                    <div class="col-2" id="contenedorprecio">
                        <p class="precio"> <span class="precio">8.99</span>€</p>
                    </div>
                    <hr style="color:#FA7F72;">
                </div>
                <!--enlace 2-->
                <div class="row-fluid" id="enlace2" style="display:none;">
                    <a href="store2.php">Alfombrilla de programador</a>
                    <hr style="color:#FA7F72;">
                </div>
                <div class="row-rev">
                    <p class="subtotal">Subtotal (<span class="numProductos">2</span> productos):<span class="preciosubtotal">17,98</span>€</p>
                </div>
            </div>
            <!--Espacio-->
            <div class="col-lg-1"></div>
            <!--Asisde-->
            <div class="col-lg-3 col-xs-12" id="aside">

                <p class="subtotal">Subtotal (<span class="numProductos">2</span> productos):<span class="preciosubtotal">17,98</span>€</p>
                <div class="container-fluid">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-10">
                                    Pen de programador
                                </div>
                                <div class="col-2"><span class="badge rounded-pill" id="cantidadProd1">1</span></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-10">
                                    Alfombrilla de programador
                                </div>
                                <div class="col-2"><span class="badge rounded-pill" id="cantidadProd2">1</span></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <br>
                <input class="btn" src="tramitarPedido.php" id="botonpagar" type="submit" value="Tramitar pedido">
            </div>
        </div>

    </section>

    <!--Relacionados-->
    <section class="container-fluid">
    <div class="row" id="relacionados">
      <h2>Productos relacionados con este producto</h2>
      <?php
      $relacionados = array(
        "producto1" => array("nombre" => "Sudadera Informatico", "precio" => "25,95", "imagen" => "products/sudadera3.webp"),
        "producto2" => array("nombre" => "Camiseta Ingeniero", "precio" => "13,95", "imagen" => "products/camiseta.webp"),
        "producto3" => array("nombre" => "Sudadera Programacion", "precio" => "23,95", "imagen" => "products/sudadesra.webp"),
        "producto4" => array("nombre" => "Sudadera Ingeniero", "precio" => "21,95", "imagen" => "products/ingeniero-informatico-ingeniero-informatico.webp")
      );
      foreach ($relacionados as $producto => $elemento) {
      ?>
        <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">
          <a href="#" class="card card__link">
            <div class="card" style="width: 18rem;">
              <img src="<?= $elemento['imagen'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $elemento['nombre'] ?></h5>
                <p class="precioRel"><?= $elemento['precio'] ?>€</p>
                <form>
                  <p class="clasificacion">
                    <input id="radio1" type="radio" name="estrellas" value="5">
                    <label class="estrellaColor" for="radio1">★</label>
                    <input id="radio2" type="radio" name="estrellas" value="4">
                    <label class="estrellaColor" for="radio2">★</label>
                    <input id="radio3" type="radio" name="estrellas" value="3">
                    <label class="estrellaColor" for="radio3">★</label>
                    <input id="radio4" type="radio" name="estrellas" value="2">
                    <label class="estrellaColor" for="radio4">★</label>
                    <input id="radio5" type="radio" name="estrellas" value="1">
                    <label class="estrellaColor" for="radio5">★</label>
                  </p>
                </form>
              </div>
            </div>

          </a>
        </div>
      <?php } ?>
    </div>
  </section>

    <!--PreFooter-->
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
    <!--Footer-->
    <?php
    include "../code/php/footer.php";
    ?>

</body>

</html>