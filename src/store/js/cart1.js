/*saber los productos que quiere comprar*/
function contarProductos() {
  const checks = document.querySelectorAll(".form-check-input");
  const precios = document.querySelectorAll("span.precio");
  var prodSubtotal = 0;
  var prodprecio=0;
  for (let index = 0; index < checks.length; index++) {
    if (checks[index].parentNode.parentNode.parentNode.style.display === "none") {
    } else {
      if (checks[index].checked) {
        prodSubtotal++;
        prodprecio += parseFloat(precios[index].textContent);
      }
    }
  }
  const subtotales = document.querySelectorAll("span.numProductos");
  const preciosub = document.querySelectorAll("span.preciosubtotal");
  for (let index = 0; index < subtotales.length; index++) {
   subtotales[index].textContent = prodSubtotal;
    preciosub[index].textContent = prodprecio;
  }
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

function cantidades(elemento) {
  const cantidades = document.getElementById(elemento);
  cantidades.options[cantidades.selectedIndex].value;
  /*numeros del aside*/
  const badges = document.querySelectorAll(".badge");
  badges.forEach((badge) => {
    if (
      badge.id.substr(badge.id.length - 1) ===
      elemento.substr(elemento.length - 1)
    ) {
      badge.textContent = cantidades.options[cantidades.selectedIndex].value;
    }
  });
}

/*eliminar el producto del aside*/

function quitarProductoAside(producto) {
  const badges = document.querySelectorAll(".badge");
  badges.forEach((badge) => {
    if (
      badge.id.substr(badge.id.length - 1) ===
      producto.substr(producto.length - 1)
    ) {
      badge.parentNode.parentNode.style.display = "none";
    }
  });
}
/*let datosProducto = JSON.parse(window.localStorage.getItem("form"));
datosProducto.forEach(element => {
  alert(element.value);
})*/
