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

        <!-- Navbar brand -->
        <a class="navbar-brand allnav" href="<?php echo $dir . 'index.php'?>"><img
                src="<?php echo $dir . 'assets/images/logo.svg'?>" alt=""></a>

        <!-- md search -->
        <form class="d-none d-md-block d-lg-none">
            <input class="form-control search-allnav" type="search" placeholder="Búsqueda" aria-label="Search"
                id="md-search-allnav">
        </form>

        <!-- sm right side -->
        <section class="ms-auto d-flex d-md-none">

            <!-- User icon sm -->
            <div>
                <a href="<?php echo $dir . 'login/login.php'?>" class="nav-link">
                    <img src="<?php echo $dir . 'assets/icons/circle-user-regular.svg'?>" alt=""
                        class="icon-allnav allnav">
                    <span>Julisito</span>
                </a>
            </div>

            <!-- dropdown toggle -->
            <button class="navbar-toggler allnav ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#allnavMenu"
                aria-controls="allnavMenu" aria-expanded="false" aria-label="Toggle navigation"
                id="toggler-button-allnav">
                <img src="<?php echo $dir . 'assets/icons/hamburguer-menu.svg'?>" alt="" class="icon-allnav allnav">
            </button>
        </section>

        <!-- lg search -->
        <form class="d-none d-lg-flex ms-3">
            <button onclick="buscar()" id="search-icon-allnav" type="button"><img
                    src="<?php echo $dir . 'assets/icons/magnifying-glass-solid.svg'?>" alt=""></button>
            <input class="form-control search-allnav none-allnav" type="search" placeholder="Búsqueda"
                aria-label="Search" id="main-search-allnav">
        </form>

        <!-- Right side -->
        <div class="collapse navbar-collapse" id="allnavMenu">
            <div class="ms-auto">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <!-- sm search -->
                    <form class="d-flex d-lg-none mt-2">
                        <input class="form-control me-2 search-allnav" type="search" placeholder="Búsqueda"
                            aria-label="Search" id="dropdown-search-allnav">
                    </form>

                    <!-- dropdown items  -->
                    <li class="nav-item allnav">
                        <a class="nav-link" href="<?php echo $dir . 'store/store.php'?>">Tienda</a>
                    </li>
                    <li class="nav-item allnav">
                        <a class="nav-link" href="<?php echo $dir . 'courses/courses.html'?>">Oferta Formativa</a>
                    </li>
                    <li class="nav-item allnav">
                        <a class="nav-link" href="<?php echo $dir . 'gallery/gallery.php'?>">Galería</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- User icon md/lg-->
        <div class="d-none d-md-block ms-4">
            <a href="<?php echo $dir . 'login/login.php'?>" class="nav-link">
                <img src="<?php echo $dir . 'assets/icons/circle-user-regular.svg'?>" alt="" class="icon-allnav allnav">
                <span>Julisito</span>
            </a>
        </div>
    </div>
</nav>