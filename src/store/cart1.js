/*saber los productos que quiere comprar*/
function contarProductos() {
  const checks = document.querySelectorAll(".form-check-input");
  var prodSubtotal = 0;
  checks.forEach((check) => {
    if (check.parentNode.parentNode.parentNode.style.display === "none") {
    } else {
      if (check.checked) {
        prodSubtotal++;
      }
    }
  });
  const subtotales = document.querySelectorAll("span.numProductos");
  subtotales.forEach((subtotal) => {
    subtotal.textContent = prodSubtotal;
  });
}
/*eliminar productos*/
function eliminarProducto(producto, enlace) {
  document.getElementById(producto).style.display = "none";
  quitarProductoAside(producto);
  document.getElementById(enlace).style.display = "inline";
}
/* para lanzar que cuando se elimine un producto se actualize el subtotal*/
function lanzar(producto, enlace) {
  eliminarProducto(producto, enlace);
  contarProductos();
}

/*cambiar en el aside el numero de veces que se pide un producto */

function peep(elemento){
   const cantidades= document.getElementById(elemento);
   cantidades.options[cantidades.selectedIndex].value
   /*numeros del aside*/
   const badges = document.querySelectorAll(".badge");
   badges.forEach(badge => {
        if(((badge.id).substr(badge.id.length -1 ))===elemento.substr(elemento.length -1 )){
            badge.textContent=cantidades.options[cantidades.selectedIndex].value;
        }
   });
}

/*eliminar el producto del aside*/

function quitarProductoAside(producto){
    const badges = document.querySelectorAll(".badge");
   badges.forEach(badge => {
        if(((badge.id).substr(badge.id.length -1 ))===producto.substr(producto.length -1 )){
            badge.parentNode.style.display='none';
        }
   });
}