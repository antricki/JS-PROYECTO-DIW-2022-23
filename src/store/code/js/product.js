class Producto {
  propiedades = [];
  constructor(nombre, tamaño, color, cantidad, ticket, precio) {
    this.propiedades[0] = nombre;
    this.propiedades[1] = tamaño;
    this.propiedades[2] = color;
    this.propiedades[3] = cantidad;
    this.propiedades[4] = ticket;
    this.propiedades[5] = precio;
  }
}

let color = "";
function añadircolor(boton) {
  color = boton.textContent;
  /*para cambiar el cursor */
  document.getElementById("botoncarrito").style.cursor = "pointer";
}
window.addEventListener("load", () => {
  if (localStorage.clickcount > 0) {
    var cantidades = 0;
    for (let index = 1; index <= localStorage.clickcount; index++) {
      console.log(localStorage.getItem(index));
      var productoo = localStorage.getItem(index).split(",");
      cantidades += parseInt(productoo[3]);
    }
    document.getElementById("basket-items-allnav").textContent = cantidades;
  } else {
    document.getElementById("basket-items-allnav").textContent = "";
  }
});
function pasarInfoProduct() {
  if (typeof Storage !== "undefined") {
    if (color == "") {
      alert("Debes elegir un color");
    } else {
      /*cogo los datos de sus repectivos sitios  */
      const cantidad = document.getElementById("cantidades");
      const tamaño = document.getElementById("tallas");
      const nombre = document.getElementById("nombre");
      const ticket = document.getElementById("ticketregalo");
      const precio = document.getElementById("precioProducto");
      /*creo un objeto producto */
      var producto = new Producto(
        nombre.textContent,
        tamaño.options[tamaño.selectedIndex].value,
        color,
        cantidad.options[cantidad.selectedIndex].value,
        ticket.checked,
        precio.textContent
      );
      if (localStorage.clickcount) {
        localStorage.clickcount = Number(localStorage.clickcount) + 1;
      } else {
        localStorage.clickcount = 1;
      }
      abrirModal(producto);
      localStorage.setItem("producto", producto.propiedades);
      propiedades = localStorage.getItem("producto").split(",");
      var numproduc = localStorage.clickcount;
      if (numproduc >= 1) {
        localStorage.setItem(numproduc, propiedades);
      }
      if (localStorage.clickcount > 0) {
        var cantidades = 0;
        for (let index = 1; index <= localStorage.clickcount; index++) {
          console.log(localStorage.getItem(index));
          var productoo = localStorage.getItem(index).split(",");
          cantidades += parseInt(productoo[3]);
        }
        document.getElementById("basket-items-allnav").textContent = cantidades;
      } else {
        document.getElementById("basket-items-allnav").textContent = "";
      }
    }
  } else {
    document.getElementById("nombre").innerHTML =
      "Sorry, your browser does not support Web Storage...";
  }
}
/*pop up */
const btnCerrarModal = document.getElementById("cerrar-modal");
const modal = document.getElementById("modal");

function abrirModal(producto) {
  const tituloVentana2 = document.getElementById("tituloVentana2");
  const tituloVentana = document.getElementById("tituloVentana");
  const contenido = document.getElementById("contenido");
  tituloVentana.textContent = "El producto se ha añadido!!";
  tituloVentana2.textContent = producto.propiedades[0];
  contenido.innerHTML =
    "<div class='row'>" +
    "<div class='col-sm-6 col-xs-12'>" +
    "<div class='row'>Precio:<span class='propiedadesPOP'>" +
    producto.propiedades[5] +
    " </span></div>" +
    "<div class='row'>Tamaño:<span class='propiedadesPOP'>" +
    producto.propiedades[1] +
    "</span></div>" +
    "<div class='row'>Color:<span class='propiedadesPOP'>" +
    producto.propiedades[2] +
    "</span></div>" +
    "<div class='row'>Cantidad:<span class='propiedadesPOP'>" +
    producto.propiedades[3] +
    "</span></div>" +
    "<div class='row'>Ticket regalo:<span class='propiedadesPOP'>" +
    producto.propiedades[4] +
    "</span></div>" +
    "</div>" +
    "<div class='col-sm-6 col-xs-12'><img id='imagenPopUP' src='assets/products/camiseta2.webp' alt='No carga la foto'></img></div>" +
    "</div>";

  modal.showModal();
}
btnCerrarModal.addEventListener("click", () => {
  modal.close();
});
