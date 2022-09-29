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
    <link rel="stylesheet" href="cart1.css">
</head>

<body>
    <!--Nav-->
    <?php
    $dir=__DIR__;
    include "../code/php/";
    include "../code/php/navbar.php";
    ?>

    <div class="container">
        <div class="row">
            <!--Productos cesta-->
            <div class="col-lg-9 col-xs-12">
                <h2>Cesta</h2>
                <div class="row-rev">
                    <p id="precioIzquierda">Precio</p>
                </div>

                <hr style="color:#FA7F72;">
                <div class="row">
                    <div class="col-3" id="imgChek">
                        <div class="form-check">
                            <input class="form-check-input" checked type="checkbox" value="" id="checkarticulo">
                        </div>
                        <img src="products/pen.jpg" class="imagen" alt="">
                    </div>
                    <div class="col-7" id="texto">
                        <h2>Pen de gran programador</h2>
                        <p> <span class="enStock">En Stock </span> <br>
                            <b> Tamaño:</b> S <br>
                            <b> Color:</b> Verde

                        </p>
                        <select class="form-contol" id="cantidades" aria-label=" select example">
                            <option class="talla" value="xl">1</option>
                            <option class="talla" value="L">2</option>
                            <option class="talla" value="M">3</option>
                            <option class="talla" value="S">4</option>
                            <option class="talla" value="XS">5</option>
                        </select>
                        <input class="eliminar" type="submit" name="eliminar" value="Eliminar">

                    </div>
                    <div class="col-2" id="contenedorprecio">
                        <p class="precio">8,99€</p>
                    </div>
                </div>
                <hr style="color:#FA7F72;">
                <div class="row">
                    <div class="col-3" id="imgChek">
                        <div class="form-check">
                            <input class="form-check-input" checked type="checkbox" value="" id="checkarticulo">
                        </div>
                        <img src="products/alfombrilla.jpg" class="imagen" alt="">
                    </div>
                    <div class="col-7" id="texto">
                        <h2>Alfombrilla de gran programador</h2>
                        <p> <span class="enStock">En Stock </span> <br>
                            <b> Tamaño:</b> M <br>
                            <b> Color:</b> Negra 
                        </p>
                        <select class="form-contol" id="cantidades" aria-label=" select example">
                            <option class="talla" value="xl">1</option>
                            <option class="talla" value="L">2</option>
                            <option class="talla" value="M">3</option>
                            <option class="talla" value="S">4</option>
                            <option class="talla" value="XS">5</option>
                        </select>
                        <input class="eliminar" type="submit" name="eliminar" value="Eliminar">

                    </div>
                    <div class="col-2" id="contenedorprecio">
                        <p class="precio">5,99€</p>
                    </div>
                </div>
                <hr style="color:#FA7F72;">
                <div class="row-rev">
                    <p class="precio">Subtotal (2 productos):14,98€</p>
                </div>
            </div>
            <!--Asisde-->
            <div class="col-lg-3 col-xs-12" id="aside">
            <p class="precio">Subtotal (2 productos):14,98€</p>
                <input class="btn " id="botonpagar" type="submit" value="Tramitar pedido">
            </div>
        </div>

    </div>

    <!--Relacionados-->
    <div class="row" id="relacionados">
        <h2>Productos relacionados con tu cesta</h2>
        <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">
            <div class="card" style="width: 18rem;">
                <img src="products/sudadera3.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sudadera Informatico</h5>
                    <p class="precio">25,95€</p>
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

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">

            <div class="card" style="width: 18rem;">
                <img src="products/camiseta.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Ingeniero</h5>
                    <p class="precio">13,95€</p>
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

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">

            <div class="card" style="width: 18rem;">
                <img src="products/sudadesra.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sudadera Programacion</h5>
                    <p class="precio">23,95€</p>
                    <form id="estres">
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

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">

            <div class="card" style="width: 18rem;">
                <img src="products/ingeniero-informatico-ingeniero-informatico.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sudadera Ingeniero</h5>
                    <p class="precio">21,95€</p>
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

        </div>
    </div>

    <footer class="bg-dark text-center text-white">
        <div class="container p-4">
            <section class="mb-4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                    repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                    eum harum corrupti dicta, aliquam sequi voluptate quas.
                </p>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
    </footer>

</body>

</html>