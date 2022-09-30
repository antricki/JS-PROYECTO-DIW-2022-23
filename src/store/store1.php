<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <!-- fuentes -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600;700&family=League+Spartan:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <!-- fin fuentes -->
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<!--• Gris : #EBEBEB  un 60% de la página, el fondo y lo menos important.
    • Naranja: #F5A25D un 10% para aquello que llama a la acción.
    • Rojo: #FA7F72 solo para pequeños detalles o pequeños bloques de texto
    • Azul: #389393 para el footer 
    https://www.shutterstock.com/es/create/home para crear imagenes-->
<body>
    <!-- Navbar -->
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">
              <img src="../assets/images/logo_transparente.png" alt="" width="30" height="24" class="d-inline-block align-text-top navbar-img">
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div class="fondo__banner p-5 text-center bg-image">
    <div class="mask">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="texto__banner">
          <h1 class="mb-3">OFERTA FLASH!!!</h1>
          <h4 class="mb-3">Por tiempo limitado en todas tus compras</h4>
          <h1 class="mb-3">-50%</h1>
          <a class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>
    <!-- sección 1: PRODUCTO ESTRELLA -->
<hr class="raya__header"/>   
<section class="oferta">
  <div class="container-fluid">
    <div class="oferta_container_title container-fluid">
      <h2 class="destacados_title">Nuestro Producto Estrella...</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 top">
      <div class="col d-flex justify-content-around">
        <div class="destacados_title__img">
          <figure class="figure img-fluid">
            <img src="products/ingeniero-informatico-ingeniero-informatico.webp" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption">
              <!-- código de la clasificación de estrellas -->
              <form class="destacados_estrellas">
                <p class="clasificacion">
                   <input id="radio1" type="radio" name="estrellas" value="5">
                    <label for="radio1">★</label>
                    <input id="radio2" type="radio" name="estrellas" value="4">
                    <label for="radio2">★</label>
                    <input id="radio3" type="radio" name="estrellas" value="3">
                    <label for="radio3">★</label>
                    <input id="radio4" type="radio" name="estrellas" value="2">
                    <label for="radio4">★</label>
                    <input id="radio5" type="radio" name="estrellas" value="1">
                    <label for="radio5">★</label>
                </p>
              </form>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="explicacion">
        <h2 class="explicacion_title">...será tu nueva SUDADERA favorita!!</h2>
        <p class="text_explicacion">Nuestra SUDADERA de informático. Ofrece la flexibilidad para dar libertad de movimiento. Con ella te sentirás como en casa, comfortable y calentita, mientras realizas tus trabajos ante el ordenador.
        </p>
        <div class="enlace">
          <a href="#" class="btn enlace_btn">Añadir al carrito</a>
        </div>
      </div>
    </div>
  </div>
</section>
  	
<hr class="raya"/>
<!-- sección 2: LO QUE MÁS GUSTA -->
<section class="gusta">
  <div class="container-fluid destacados-container_title">
    <h2 class="destacados_title">Lo que más gusta a otros clientes</h2>
  </div>
    <div class="container-fluid destacados" >
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 rounded d-flex d-inline-flex">
          <div class="col">
            <div class="card h-100">
              <img src="products/camiseta.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Sudadera con capucha unisex.</p>
                <form class="destacados_estrellas">
                  <p class="clasificacion">
                     <input id="radio1" type="radio" name="estrellas" value="5">
                      <label for="radio1">★</label>
                      <input id="radio2" type="radio" name="estrellas" value="4">
                      <label for="radio2">★</label>
                      <input id="radio3" type="radio" name="estrellas" value="3">
                      <label for="radio3">★</label>
                      <input id="radio4" type="radio" name="estrellas" value="2">
                      <label for="radio4">★</label>
                      <input id="radio5" type="radio" name="estrellas" value="1">
                      <label for="radio5">★</label>
                  </p>
                </form>
              </div>
              <div class="card-footer">
                <input class="card-footer_input" type="submit" value="Añadir" name="añadir">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="products/sudadera3.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Sudadera con capucha unisex.</p>
                <form class="destacados_estrellas">
                  <p class="clasificacion">
                     <input id="radio1" type="radio" name="estrellas" value="5">
                      <label for="radio1">★</label>
                      <input id="radio2" type="radio" name="estrellas" value="4">
                      <label for="radio2">★</label>
                      <input id="radio3" type="radio" name="estrellas" value="3">
                      <label for="radio3">★</label>
                      <input id="radio4" type="radio" name="estrellas" value="2">
                      <label for="radio4">★</label>
                      <input id="radio5" type="radio" name="estrellas" value="1">
                      <label for="radio5">★</label>
                  </p>
                </form>
              </div>
              <div class="card-footer">
                <input class="card-footer_input" type="submit" value="Añadir" name="añadir">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="products/sudadesra.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Sudadera con capucha unisex.</p>
                <form class="destacados_estrellas">
                  <p class="clasificacion">
                     <input id="radio1" type="radio" name="estrellas" value="5">
                      <label for="radio1">★</label>
                      <input id="radio2" type="radio" name="estrellas" value="4">
                      <label for="radio2">★</label>
                      <input id="radio3" type="radio" name="estrellas" value="3">
                      <label for="radio3">★</label>
                      <input id="radio4" type="radio" name="estrellas" value="2">
                      <label for="radio4">★</label>
                      <input id="radio5" type="radio" name="estrellas" value="1">
                      <label for="radio5">★</label>
                  </p>
                </form>
              </div>
              <div class="card-footer">
                <input class="card-footer_input" type="submit" value="Añadir" name="añadir">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="products/camiseta2.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Sudadera con capucha unisex.</p>
                <form class="destacados_estrellas">
                  <p class="clasificacion">
                     <input id="radio1" type="radio" name="estrellas" value="5">
                      <label for="radio1">★</label>
                      <input id="radio2" type="radio" name="estrellas" value="4">
                      <label for="radio2">★</label>
                      <input id="radio3" type="radio" name="estrellas" value="3">
                      <label for="radio3">★</label>
                      <input id="radio4" type="radio" name="estrellas" value="2">
                      <label for="radio4">★</label>
                      <input id="radio5" type="radio" name="estrellas" value="1">
                      <label for="radio5">★</label>
                  </p>
                </form>
              </div>
              <div class="card-footer">
                <input class="card-footer_input" type="submit" value="Añadir" name="añadir">
              </div>
            </div>
          </div>
        </div>
</section>
  	
<hr class="raya"/>
<!-- sección 3: OTROS PRODUCTOS -->
<section class="otros_productos">
      <div class="container-fluid container_title">
        <h2 class="destacados_title">Otros productos</h2>
      </div>
      <div class="container container-fluid otros_productos__container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-md-center">
          <div class="col">
            <a href="#">
            <figure class="figure">
              <img src="products/botella.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Botella</figcaption>             
            </figure>
          </a>
          </div>
          <div class="col">
            <a href="http://">
            <figure class="figure">
              <img src="products/puff.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Puff para móvil</figcaption>
            </figure>
          </a>
          </div>
          <div class="col">
            <a href="http://">
            <figure class="figure">
              <img src="products/taza2.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Taza</figcaption>
            </figure>
          </a>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-md-center">
          <div class="col">
            <a href="http://">
            <figure class="figure">
              <img src="products/alfombrilla.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Alfombrilla para ratón</figcaption>
            </figure>
          </a>
          </div>
          <div class="col">
            <a href="http://">
            <figure class="figure">
              <img src="products/cargador.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Cargador</figcaption>
            </figure>
          </a>
          </div>
          <div class="col">
            <a href="http://">
            <figure class="figure">
              <img src="products/pen2.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Pen 32GB</figcaption>
            </figure>
          </a>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-md-center">
          <div class="col">
            <a href="http://">
            <figure class="figure">
              <img src="products/fundaPortatil.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Funda para pórtatil</figcaption>
            </figure>
          </a>
          </div>
          <div class="col">
            <a href="http://">
            <figure class="figure">
              <img src="products/manta.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Manta</figcaption>
            </figure>
          </a>
          </div>
          <div class="col">
            <a href="http://">
            <figure class="figure">
              <img src="products/powerbank.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">PowerBank</figcaption>
            </figure>
          </a>
          </div>
        </div>
      </div>
</section>
<hr class="raya"/>
    <!-- Footer -->
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
    <?php
    include "../code/php/footer.php";
  ?>
</body>
</html>