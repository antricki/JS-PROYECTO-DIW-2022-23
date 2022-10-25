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

function añadirProductos() {
  
  if (typeof Storage !== "undefined") {
    propiedades = localStorage.getItem("producto").split(",");
    var numproduc = localStorage.clickcount;
    if (numproduc >= 1) {
      localStorage.setItem(numproduc, propiedades);
    }
    mostrarProductos();
  } else {
    document.getElementById("resul").innerHTML =
      "Sorry, your browser does not support Web Storage...";
  }
}
function mostrarProductos(){
  var contenedor=document.getElementById('subtotal');
  for (let index = 1; index <= localStorage.clickcount; index++) {
    producto=localStorage.getItem(index).split(',');
    mostrarProducto(producto,contenedor,index);
  }
}
function mostrarProducto(producto,contenedor,index){
  contenedor.insertAdjacentHTML('beforebegin', 
  "<div class='row' id='producto1'>"+
      "<div class='col-3' id='imgChek'>"+
          "<div class='form-check'>"+
            "<input class='form-check-input' checked onclick='contarProductos()' type='checkbox' id='checkarticulo'>"+
          "</div>"+
          "<img src='products/pen.jpg' class='imagen' >"+
      "</div>"+
      "<div class='col-7' id='texto'>"+
          "<h2>"+producto[0]+"</h2>"+
          "<p><span class='enStock'>En Stock </span> <br>"+
              "<b> Tamaño:</b>"+producto[1]+" <br>"+
              "<b> Color:</b>"+producto[2]+" <br>"+
              "<select class='form-contol cantidades' onchange='cantidades(this.id)'' id='cantidades1' aria-label='select example'>"+
                  "<option value='1'>1</option>"+
                  "<option value='2'>2</option>"+
                  "<option value='3'>3</option>"+
                  "<option value='4'>4</option>"+
                  "<option value='5'>5</option>"+
              "</select>"+
              "<input class='eliminar' type='submit' name='eliminar' value='Eliminar' onclick='eliminar("+index+")''>"+
          "</p>"+
      "</div>"+
      "<div class='col-2' id='contenedorprecio'>"+
          "<p class='precio'><span class='precio'>"+producto[5]+"</span>€</p>"+
      "</div>"+
      "<hr style='color:#FA7F72;'>"+
  "</div>");
}
function eliminar(index){
  if (localStorage.clickcount) {
    localStorage.removeItem(localStorage.clickcount);
    if ((localStorage.clickcount)>0) {
      localStorage.removeItem(localStorage.getItem(index));
      localStorage.clickcount = Number(localStorage.clickcount) - 1; 
    }
  } else {
    localStorage.clickcount = 0;
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
document.designMode = "off";