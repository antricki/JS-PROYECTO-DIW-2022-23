<?php
    // $dirtemp = explode('/',str_replace('\\', '/', __DIR__));
    // $num = 0;
    // for ($i=0; $i < count($dirtemp); $i++) { 
    //     if ($dirtemp[$i] === "src"){
    //         $num = $i + 1;
    //     }
    // }
    // $num = count($dirtemp) - $num;
    // $dir = "";
    // for ($i=0; $i < $num; $i++) { 
    //     $dir = $dir . "../";
    // }
    $dircode = "../";
    $dirassets = "../../";
?>
<script src="<?php echo $dircode . 'code/js/toggle.js'?>"></script>
<link rel="stylesheet" href="<?php echo $dircode . 'code/css/navbar.css'?>">
<script>
    let pormostrar = true;

    function buscar() {
        if (pormostrar) {
            pormostrar = false;
            muestraBusqueda()
        } else {
            document.getElementById("search-icon").setAttribute('type', 'submit');
        }
    }

    function muestraBusqueda() {
        document.getElementById("main-search").classList.remove("none");
        document.getElementById("search-icon").classList.add("abierto");
    }
</script>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="<?php echo $dirassets . 'assets/images/logo.svg'?>" alt=""></a>
        <h1 class="d-flex d-lg-none">Dpto. Informática</h1>
        <a class="d-lg-none ms-auto" href="#" id="sm-login"><img src="<?php echo $dirassets . 'assets/icons/circle-user-regular.svg'?>" alt="" class="icon"></a>
        <button class="navbar-toggler d-flex" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation" id="toggler-button" onclick="useToggle(document.getElementById('toggle'))">
            <span></span>
        </button>
        <form class="d-none d-lg-flex">
            <button onclick="buscar()" id="search-icon" type="button"><img
                    src="<?php echo $dirassets . 'assets/icons/magnifying-glass-solid.svg'?>" alt=""></button>
            <input class="form-control me-2 search none" type="search" placeholder="Búsqueda" aria-label="Search"
                id="main-search">
        </form>

        <!-- Right side -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="ms-auto">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <form class="d-flex d-lg-none mt-2">
                        <input class="form-control me-2 search" type="search" placeholder="Búsqueda" aria-label="Search"
                            id="dropdown-search">
                    </form>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Oferta Formativa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galería</a>
                    </li>
                    <li class="nav-item d-none d-lg-block icon">
                        <a class="nav-link" href="#" id="lg-login"><img src="<?php echo $dirassets . 'assets/icons/circle-user-regular.svg'?>" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>