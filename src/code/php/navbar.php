<script src="<?php echo $dir . 'code/js/toggle.js'?>"></script>
<link rel="stylesheet" href="<?php echo $dir . 'code/css/navbar.css'?>">
<script>
    let pormostrar = true;

    function buscar() {
        if (pormostrar) {
            pormostrar = false;
            muestraBusqueda()
        } else {
            document.getElementById("search-icon-allnav").setAttribute('type', 'submit');
        }
    }

    function muestraBusqueda() {
        document.getElementById("main-search-allnav").classList.remove("none-allnav");
        document.getElementById("search-icon-allnav").classList.add("abierto-allnav");
    }
</script>
<nav class="navbar navbar-expand-lg navbar-light allnav">
    <div class="container-fluid">
        <a class="navbar-brand allnav" href="#"><img src="<?php echo $dir . 'assets/images/logo.svg'?>" alt=""></a>
        <h1 class="d-flex d-lg-none allnav">Dpto. Informática</h1>
        <a class="d-lg-none ms-auto" href="#" id="sm-login-allnav"><img src="<?php echo $dir . 'assets/icons/circle-user-regular.svg'?>" alt="" class="icon"></a>
        <button class="navbar-toggler d-flex allnav" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation" id="toggler-button-allnav" onclick="useToggle(document.getElementById('toggle'))">
            <span></span>
        </button>
        <form class="d-none d-lg-flex">
            <button onclick="buscar()" id="search-icon-allnav" type="button"><img
                    src="<?php echo $dir . 'assets/icons/magnifying-glass-solid.svg'?>" alt=""></button>
            <input class="form-control me-2 search-allnav none-allnav" type="search" placeholder="Búsqueda" aria-label="Search"
                id="main-search-allnav">
        </form>

        <!-- Right side -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent-allnav">
            <div class="ms-auto">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <form class="d-flex d-lg-none mt-2">
                        <input class="form-control me-2 search-allnav" type="search" placeholder="Búsqueda" aria-label="Search"
                            id="dropdown-search-allnav">
                    </form>
                    <li class="nav-item allnav">
                        <a class="nav-link" href="#">Tienda</a>
                    </li>
                    <li class="nav-item allnav">
                        <a class="nav-link" href="#">Oferta Formativa</a>
                    </li>
                    <li class="nav-item allnav">
                        <a class="nav-link" href="#">Galería</a>
                    </li>
                    <li class="nav-item d-none d-lg-block icon-allnav allnav">
                        <a class="nav-link" href="#" id="lg-login-allnav"><img src="<?php echo $dir . 'assets/icons/circle-user-regular.svg'?>" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>