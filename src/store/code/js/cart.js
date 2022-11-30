document.designMode = "on";
/*saber los productos que quiere comprar*/
function contarProductos() {
  const checks = document.querySelectorAll(".form-check-input");
  const precios = document.querySelectorAll("span.precio");
  var prodSubtotal = 0;
  var prodprecio = 0;
  for (let index = 0; index < checks.length; index++) {
    if (
      checks[index].parentNode.parentNode.parentNode.style.display === "none"
    ) {
    } else {
      if (checks[index].checked) {
        var producto = localStorage.getItem(index+1).split(",");
        prodSubtotal=prodSubtotal+(1*(producto[3]));
        prodprecio += parseFloat(precios[index].textContent*(producto[3]));
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
function inicializarPagina() {
  añadirProductos();
  contarProductos();
}
const ul = document.getElementById("listaProductos");
function mostrarAside() {
  var lis='';
  for (let index = 1; index <= localStorage.clickcount; index++) {
    var producto = localStorage.getItem(index).split(",");
    lis+="<li class='list-group-item'>"+
        "<div class='row'>"+
          "<div class='col-10'>"+producto[0]+"</div>"+
          "<div class='col-2'>"+
            "<span class='badge rounded-pill' id='cantidadProd"+index+"'>"+
            producto[3]+
           "</span>"+
          "</div>"+
        "</div>"+
      "</li>"
  }
  ul.innerHTML='<ul class="list-group list-group-flush">'+lis+'</ul>'
  
}

function añadirProductos() {
  if (typeof Storage !== "undefined") {
    if (localStorage.clickcount > 0) {
      document.getElementById("basket-items-allnav").textContent =
        localStorage.clickcount;
    } else {
      document.getElementById("basket-items-allnav").textContent = "";
    }
    mostrarProductos();
    mostrarAside();
    localStorage.removeItem("producto");
  } else {
    document.getElementById("resul").innerHTML =
      "Sorry, your browser does not support Web Storage...";
  }
}

function mostrarProductos() {
  var contenedor = document.getElementById("subtotal");
  for (let index = 1; index <= localStorage.clickcount; index++) {
    producto = localStorage.getItem(index).split(",");
    mostrarProducto(producto, contenedor, index);
  }
}
function mostrarProducto(producto, contenedor, index) {
  contenedor.insertAdjacentHTML(
    "beforebegin",
    "<div class='row' id='producto" +
      index +
      "'>" +
      "<div class='col-3' id='imgChek'>" +
      "<div class='form-check'>" +
      "<input class='form-check-input' checked onclick='contarProductos()' type='checkbox' id='checkarticulo'>" +
      "</div>" +
      "<img src='products/pen.jpg' class='imagen' >" +
      "</div>" +
      "<div class='col-7' id='texto'>" +
      "<h2>" +
      producto[0] +
      "</h2>" +
      "<p><span class='enStock'>En Stock </span> <br>" +
      "<b> Tamaño:</b>" +
      producto[1] +
      " <br>" +
      "<b> Color:</b>" +
      producto[2] +
      " <br>" +
      "<select class='form-contol cantidades' onchange='cantidades(this.id)'' id='cantidades"+index+"' aria-label='select example'>" +
      cantidadproducto(producto[3]) +
      "</select>" +
      "<input class='eliminar' type='submit' name='eliminar' value='Eliminar' onclick='eliminar(" +
      index +
      ")''>" +
      "</p>" +
      "</div>" +
      "<div class='col-2' id='contenedorprecio'>" +
      "<p class='precio'><span class='precio'>" +
      producto[5] +
      "</span>€</p>" +
      "</div>" +
      "<hr style='color:#FA7F72;'>" +
      "</div>" +
      "<div class='row-fluid' id='enlace" +
      index +
      "' style='display:none;'>" +
      "<a href='product.php'>" +
      producto[0] +
      "</a>" +
      "<hr style='color:#FA7F72;'>" +
      "</div>"
  );
}
function cantidadproducto(cantidad) {
  var html = "";
  for (let index = 1; index <= 5; index++) {
    if (cantidad == index) {
      html += "<option selected value='" + index + "'>" + index + "</option>";
    } else {
      html += "<option value='" + index + "'>" + index + "</option>";
    }
  }
  return html;
}

/*eliminar producto de la LocalStorage*/
function eliminar(index) {
  if (localStorage.clickcount) {
    localStorage.removeItem(localStorage.clickcount);
    if (localStorage.clickcount > 0) {
      localStorage.removeItem(localStorage.getItem(index));
      localStorage.clickcount = Number(localStorage.clickcount) - 1;
      if (localStorage.clickcount > 0) {
        document.getElementById("basket-items-allnav").textContent =
          localStorage.clickcount;
      } else {
        document.getElementById("basket-items-allnav").textContent = "";
      }
      lanzar("producto" + index, "enlace" + index);
    }
  } else {
    localStorage.clickcount = 0;
  }
}
/*eliminar producto visualmente*/
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
document.designMode = "off";
