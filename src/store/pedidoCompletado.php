<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido Completado</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600;700&family=League+Spartan:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="./code/css/storeMain.css">
</head>

<body>
    <!-- navegador -->
    <?php
    $d = __DIR__;
    include "./code/php/navbar_store.php";
    ?>
    <main class="container-fluid pedidoCompletado">
        <div class="row d-flex justify-content-md-around">
            <div class="col col-md-auto">
                <h1 class="pedido__completado_title">¡PEDIDO COMPLETADO! Gracias.</h1>
                <input type="button" value="Continuar comprando" class="tramitar__pedido-btn" onclick="location.href='store.php'">
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php
    include "../code/php/footer.php";
    ?>

</body>

</html>