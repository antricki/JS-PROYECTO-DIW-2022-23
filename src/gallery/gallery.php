<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../code/css/gallery.css">
    <title>Document</title>


</head>
<body>
  <?php
    $d = __DIR__;
    include "../code/php/route.php";
    include "../code/php/navbar.php";
  ?>
    
    <section class="gallery">
      
      
      <section class="carrusel carrusel--first">                
        <div class="carrusel__items">
          <h2 class="title">Aulas</h2>
          <div class="arrows">
            <div class="arrow arrow--left dotRight" id="dotRight"><img src="../assets/icons/caret-left.svg" alt="caret left"></div>
            <div class="arrow arrow--right dotLeft" id="dotLeft"><img src="../assets/icons/caret-right.svg" alt="caret right"></div>
          </div>          
          <div class="carrusel__big">
              <img src="https://picsum.photos/500/300/?random&1" class="img">
              <img src="https://picsum.photos/500/300/?random&2" class="img">
              <img src="https://picsum.photos/500/300/?random&3" class="img img--normal">
              <img src="https://picsum.photos/500/300/?random&4" class="img img--big">
              <img src="https://picsum.photos/500/300/?random&5" class="img img--normal">
              <img src="https://picsum.photos/500/300/?random&6" class="img">
              <img src="https://picsum.photos/500/300/?random&7" class="img">
          </div>
        </div>
        <div class="line"></div>      
      </section>
      

      

      <section class="carrusel">     
        <div class="carrusel__items">
          <h2 class="title">Promociones</h2>   
          <div class="arrows">
            <div class="arrow arrow--left dotRight" id="dotRight"><img src="../assets/icons/caret-left.svg" alt="caret left"></div>
            <div class="arrow arrow--right dotLeft" id="dotLeft"><img src="../assets/icons/caret-right.svg" alt="caret right"></div>
          </div>          
          <div class="carrusel__big">
              <img src="https://picsum.photos/500/300/?random&1" class="img">
              <img src="https://picsum.photos/500/300/?random&2" class="img">
              <img src="https://picsum.photos/500/300/?random&3" class="img img--normal">
              <img src="https://picsum.photos/500/300/?random&4" class="img img--big">
              <img src="https://picsum.photos/500/300/?random&5" class="img img--normal">
              <img src="https://picsum.photos/500/300/?random&6" class="img">
              <img src="https://picsum.photos/500/300/?random&7" class="img">
          </div>
        </div>
        <div class="line"></div>        
      </section>

      <section class="carrusel">
             
        <div class="carrusel__items">
          <h2 class="title">Instalaciones</h2> 
          <div class="arrows">
            <div class="arrow arrow--left dotRight" id="dotRight"><img src="../assets/icons/caret-left.svg" alt="caret left"></div>
            <div class="arrow arrow--right dotLeft" id="dotLeft"><img src="../assets/icons/caret-right.svg" alt="caret right"></div>
          </div>          
          <div class="carrusel__big">
              <img src="https://picsum.photos/500/300/?random&1" class="img">
              <img src="https://picsum.photos/500/300/?random&2" class="img">
              <img src="https://picsum.photos/500/300/?random&3" class="img img--normal">
              <img src="https://picsum.photos/500/300/?random&4" class="img img--big">
              <img src="https://picsum.photos/500/300/?random&5" class="img img--normal">
              <img src="https://picsum.photos/500/300/?random&6" class="img">
              <img src="https://picsum.photos/500/300/?random&7" class="img">
          </div>
        </div>
        <div class="line"></div>        
      </section>

      <section class="carrusel">
               
        <div class="carrusel__items">
          <h2 class="title">Exteriores</h2> 
          <div class="arrows">
            <div class="arrow arrow--left dotRight" id="dotRight"><img src="../assets/icons/caret-left.svg" alt="caret left"></div>
            <div class="arrow arrow--right dotLeft" id="dotLeft"><img src="../assets/icons/caret-right.svg" alt="caret right"></div>
          </div>          
          <div class="carrusel__big">
              <img src="https://picsum.photos/500/300/?random&1" class="img">
              <img src="https://picsum.photos/500/300/?random&2" class="img">
              <img src="https://picsum.photos/500/300/?random&3" class="img img--normal">
              <img src="https://picsum.photos/500/300/?random&4" class="img img--big">
              <img src="https://picsum.photos/500/300/?random&5" class="img img--normal">
              <img src="https://picsum.photos/500/300/?random&6" class="img">
              <img src="https://picsum.photos/500/300/?random&7" class="img">
          </div>
        </div>      
      </section>
         
      
      
    </section>

    <?php
    $d = __DIR__;
    include "../code/php/footer.php";
  ?>

    


    <script src="gallery.js"></script>

      <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>



    
</body>
</html>