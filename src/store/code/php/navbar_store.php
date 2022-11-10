<link rel="stylesheet" href="code/css/navbar_store.css">
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
<nav class="navbar navbar-light allnav">
    <div class="container-fluid">
        <!-- Navbar brand-->
        <a class="navbar-brand allnav" href=""><img src="assets/icons/logo_store.svg" alt=""></a>

        <!-- md search-->
        <form class="d-none d-md-block d-lg-none ms-4">
            <input class="form-control search-allnav" type="search" placeholder="Búsqueda" aria-label="Search"
                id="md-search-allnav">
        </form>

        <!-- lg search -->
        <form class="d-none d-lg-flex">
            <button onclick="buscar()" id="search-icon-allnav" type="button"><img
                    src="assets/icons/magnifying-glass-solid.svg" alt=""></button>
            <input class="form-control me-2 search-allnav none-allnav" type="search" placeholder="Búsqueda"
                aria-label="Search" id="main-search-allnav">
        </form>

        <!-- Right side -->
        <div class="ms-auto d-flex">
            <div class="p-1 me-3"><a href="../index.php" class="nav-link">Departamento</a></div>
            <div class="p-1 me-3"><a href="cart.php" class="nav-link"><span id="basket-items-allnav"></span>
                <img class="icon-allnav" src="assets/icons/cart.svg" alt=""></a></div>
            <div class="p-1 me-2"><a class="nav-link" href="../login/login.php"><img class="icon-allnav"
                src="assets/icons/circle-user-regular.svg" alt=""><span class="d-none d-md-inline ms-2">Julisito</span></a></div>
        </div>
    </div>

    <form class="d-block d-md-none container-fluid mt-2">
        <input class="form-control search-allnav" type="search" placeholder="Búsqueda" aria-label="Search"
            id="sm-search-allnav">
    </form>

</nav>