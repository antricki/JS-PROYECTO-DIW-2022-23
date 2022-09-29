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
<link rel="stylesheet" href="<?php echo $dircode . 'code/css/footer.css'?>">
<footer>
    <div class="container">
        <div class="row footer-up">
            <div class="col-md-4 contacto mb-xs-4">
                <h3 class="mb-3">¡Contáctanos!</h3>
                <a href="https://facebook.com/agrariafpcheste/"><img src="<?php echo $dirassets . 'assets/icons/facebook.svg'?>" alt=""></a>
                <a href="mailto:dptoinformatica@fpcheste.com"><img src="<?php echo $dirassets . 'assets/icons/mail.svg'?>" alt=""></a>
                <a href="https://github.com/antricki/PROYECTO-DIW-2022-23/"><img src="<?php echo $dirassets . 'assets/icons/github.svg'?>" alt=""></a>
            </div>
            <div class="col-md-8 pags">
                <h3 class="mb-3">Páginas de interés</h3>
                <a href="https://foremp.edu.gva.es/"><img src="../../assets/icons/saofct.png" alt=""></a>
                <a href="https://familia.edu.gva.es/wf-front/myitaca/login_wf?idioma=C"><img src="<?php echo $dirassets . 'assets/icons/itaca.png'?>" alt=""></a>
                <a href="https://aules.edu.gva.es/fp/login/index.php"><img src="<?php echo $dirassets . 'assets/icons/aules.png'?>" alt=""></a>
                <a href="https://portal.edu.gva.es/cvtic/es/herramientas/"><img src="<?php echo $dirassets . 'assets/icons/TICgva.png'?>" alt=""></a>
            </div>
        </div>
        <div class="row footer-down">
            <div class="col-md-2 d-none d-md-block">
                <span onclick="alert('foros')" class="legal">Foros de usuarios</span>
            </div>
            <div class="col-md-2 d-none d-md-block">
                <span onclick="alert('cookies bla bla bla')" class="legal">Preferencias de cookies</span>
            </div>
            <div class="col-md-4 d-none d-md-block"><span>© Creado por la clase de 2ºDAW del CIPFP Cheste, promoción 2022-23</span></div>
            <div class="col-md-2 d-none d-md-block">
                <span onclick="alert('privacidad bla bla bla')" class="legal">Privacidad</span> 
            </div>
            <div class="col-md-2 d-none d-md-block">
                <span  onclick="alert('Condiciones de uso bla bla bla')" class="legal">Condiciones de uso</span>
            </div>
            <div class="d-md-none"><span>© Creado por la clase de 2ºDAW del CIPFP Cheste, promoción 2022-23</span></div>
        </div>
    </div>
</footer>