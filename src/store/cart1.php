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
    <link rel="stylesheet" href="../code/css/navbar.css">
    <link rel="stylesheet" href="cart1.css">
</head>

<body>
    <!--Nav
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
  </nav>-->
    <?php
    include "../code/php/navbar.php"
    ?>


    <div class="container">
        <div class="row">
            <div class="col-10">
                <h2>Cesta</h2>
                <hr>
            </div>
            <div class="col-2"></div>
        </div>

    </div>

    <!--Relacionados-->
    <div class="row" id="relacionados">
        <h2>Productos relacionados con tu cesta </h2>
        <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">
            <div class="card" style="width: 18rem;">
                <img src="products/sudadera3.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sudadera Informatico</h5>
                    estrellas
                    <p class="precio">25,95€</p>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">

            <div class="card" style="width: 18rem;">
                <img src="products/camiseta.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Ingeniero</h5>
                    estrellas
                    <p class="precio">13,95€</p>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">

            <div class="card" style="width: 18rem;">
                <img src="products/sudadesra.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sudadera Programacion</h5>
                    estrellas
                    <p class="precio">23,95€</p>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">

            <div class="card" style="width: 18rem;">
                <img src="products/ingeniero-informatico-ingeniero-informatico.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sudadera Ingeniero</h5>
                    estrellas
                    <p class="precio">21,95€</p>

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