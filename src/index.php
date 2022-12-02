<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <script type="module" src="code/js/index.js"></script>
    <script src="code/js/information-content.js" defer></script>
    <link rel="stylesheet" href="code/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap" rel="stylesheet"> 
    <title>Index</title>
</head>

<body>
    <section id="main">
        <?php
        $d = __DIR__;
        include "code/php/route.php";
        include "code/php/navbar.php";
        require 'code/php/generateOpinions.php';
        ?>

        <div class="video-container">
            <video class="d-block m-auto" id="vid" controls autoplay muted>
                <source src="assets/videos/movie.mp4" type="video/mp4">
                <source src="assets/videos/movie.ogv" type="video/ogg" />
                <source src="assets/videos/movie.webm" type="video/webm" />
            </video>
        </div>
        <script>
            document.getElementById('vid').play();
        </script>
    </section>

    <!-- Why choose us section -->
    <section id="whyUs" class="text-center py-5">
        <h1 class="py-3 h1">¿Por qué elegirnos?</h1>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <h2 class="h2">Reconocimiento</h2>
                    <p class="p">Somos un centro con reconocimiento internacional, en gran parte gracias a nuestro equipo de relaciones europeas</p>
                </div>
                <div class="d-block d-md-none mt-4"></div>
                <div class="col-md-6">
                    <h2>Calidad</h2>
                    <p>En nuestro centro solo contratamos a los mejores profesores, los mejores cualificados para el correcto desarrollo del alumnado.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h2>Instalaciones</h2>
                    <p>Contamos con instalaciones recien reformadas y con visión moderna que permiten al alumnado un desarrollo magnífico de sus habilidades.</p>
                </div>
                <div class="d-block d-md-none mt-4"></div>
                <div class="col-md-6">
                    <h2>Comunicación</h2>
                    <p>El centro se situa en Cheste, en una zona tranquila en la que los alumnos pueden estudiar relajadamente y está bien comunicada gracias al sistema de autobuses.</p>
                </div>
            </div>
        </div>
        <!--  -->
    </section>

    <!-- Opinions carousel -->
    <div id="carousel" class="carousel slide container my-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php echo getFormattedOpinions(3); ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Dropdown information section -->
    <section id="information" class="text-center">
        <a class="btn infoButton btn-lg mb-5" data-bs-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse" onclick="">
            ¡Infórmate!
        </a>

        <div class="collapse container mt-5" id="collapse">
            <div class="row info-collapse">
                <div class="col-md-3" id="info-menu">
                    <div class="flex-shrink-0 p-3">
                        <ul class="list-unstyled ps-0">
                            <?php
                            $menus = [
                                'El departamento' => ['Objetivo', 'Horario', 'Innovación'],
                                'Cursos' => ['Oferta Formativa', 'Semipresencial', 'Certificado profesionalidad'],
                                'Localización' => [],
                                'Contacto' => []
                            ];
                            $cont = 0;

                            foreach ($menus as $nomMenu => $submenus) {
                                $cont++;
                                switch ($nomMenu) {
                                    case 'El departamento':
                                    case 'Cursos':
                            ?>
                                        <button class="btn btn-toggle align-items-center rounded collapsed w-100 text-start" data-bs-toggle="collapse" data-bs-target="#<?php echo str_replace(' ', '', $nomMenu) ?>-collapse" aria-expanded="false">
                                            <span class="d-flex" onclick="toggleClass(document.getElementById('caret<?php echo $cont; ?>'),'rotate')">
                                                <span><?php echo $nomMenu ?></span>
                                                <img class="ms-auto dropdown-caret" src="assets/icons/line-angle-down-icon.svg" id="caret<?php echo $cont; ?>">
                                            </span>
                                        </button>
                                        <!-- WITH CLASS SHOW IT OPENS -->
                                        <div class="collapse" id="<?php echo str_replace(' ', '', $nomMenu) ?>-collapse">
                                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small text-start">
                                                <?php
                                                for ($e = 0; $e < count($submenus); $e++) {
                                                ?>
                                                    <li class="ms-3">
                                                        <input class="form-check-input js-radio" type="radio" name="infoRadio" onclick="<?php echo strtolower(str_replace(' ', '', $submenus[$e])) ?>()">
                                                        <label class="form-check-label"><?php echo $submenus[$e]; ?></label>
                                                    </li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    <?php
                                        break;
                                    case 'Localización':
                                    case 'Contacto':
                                    ?>
                                        <button class="btn align-items-center rounded w-100 text-start" onclick="<?php echo ($nomMenu === "Contacto") ? "contact()" : "showMap()"; ?>">
                                            <span><?php echo $nomMenu ?></span>
                                        </button>
                            <?php
                                        break;
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 bg-white" id="info-vessel"></div>
            </div>
        </div>
    </section>
    <?php include "code/php/footer.php"; ?>
</body>

</html>