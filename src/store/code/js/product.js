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
      //alert(producto.propiedades);
      if (localStorage.clickcount) {
        localStorage.clickcount = Number(localStorage.clickcount) + 1;
      } else {
        localStorage.clickcount = 1;
      }
      abrirModal(producto);
      localStorage.setItem("producto", producto.propiedades);
      alert("El producto se ha añadido");
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
  const tituloVentana2=document.getElementById('tituloVentana2');
  const tituloVentana=document.getElementById('tituloVentana');
  const contenido=document.getElementById('contenido');
  tituloVentana.textContent='Se ha añadido correctamente!!'
  tituloVentana2.textContent=producto.propiedades[0]
  contenido.innerHTML=
  "<div class='row'>"+
  "<div class='col-6'>"+
  "<div class='row'>Precio: "+producto.propiedades[5] +"</div>"+
  "<div class='row'>Tamaño: "+producto.propiedades[1] +"</div>"+
  "<div class='row'>Color: "+producto.propiedades[2] +"</div>"+
  "<div class='row'>Cantidad: "+producto.propiedades[3] +"</div>"+
  "<div class='row'>Ticket regalo: "+producto.propiedades[4] +"</div>"+
  "</div>"+
  "<div class='col-6'><img id='imagenPopUP' src='assets/products/camiseta2.webp' alt='No carga la foto'></img></div>"+
"</div>"
  
  modal.showModal();
}
btnCerrarModal.addEventListener("click", () => {
  modal.close();
});