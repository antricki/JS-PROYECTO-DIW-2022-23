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

/*function rellenarForm() {
  /*para saber si le ha dado al color o no 
  if (color == "") {
    alert("Debes elegir un color");
  } else {
    /*cogo los datos de sus repectivos sitios  
    const inputs = document.querySelectorAll("input.detalles");
    const cantidad = document.getElementById("cantidades");
    const tamaño = document.getElementById("tallas");
    const nombre = document.getElementById("nombre");
    const ticket = document.getElementById("ticketregalo");
    const precio = document.getElementById("precioProducto");
    /*meto los datos en el formulario 
    inputs[0].value = nombre.textContent;
    inputs[1].value = tamaño.options[tamaño.selectedIndex].value;
    inputs[2].value = color;
    inputs[3].value = cantidad.options[cantidad.selectedIndex].value;
    inputs[4].value = ticket.checked;
    inputs[5].value = precio.textContent;
    alert("El producto se ha añadido");
  }
} */

function pasarInfo() {
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
      alert(producto.propiedades);
      if (localStorage.clickcount) {
        localStorage.clickcount = Number(localStorage.clickcount) + 1;
      } else {
        localStorage.clickcount = 1;
      }
      localStorage.setItem("producto", producto.propiedades);
      alert("El producto se ha añadido");
    }
  } else {
    document.getElementById("nombre").innerHTML =
      "Sorry, your browser does not support Web Storage...";
  }
}
