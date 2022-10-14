let color = "";
function añadircolor(boton) {
  color = boton.textContent;
  /*para cambiar el cursor */
  document.getElementById("botoncarrito").style.cursor = "pointer";
}

function rellenarForm() {
  /*para saber si le ha dado al color o no */
  if (color == "") {
    alert("Debes elegir un color");
  } else {
    /*cogo los datos de sus repectivos sitios  */
    const inputs = document.querySelectorAll("input.detalles");
    const cantidad = document.getElementById("cantidades");
    const tamaño = document.getElementById("tallas");
    const nombre = document.getElementById("nombre");
    const ticket = document.getElementById("ticketregalo");
    /*meto los datos en el formulario */
    inputs[0].value = nombre.textContent;
    inputs[1].value = tamaño.options[tamaño.selectedIndex].value;
    inputs[2].value = color;
    inputs[3].value = cantidad.options[cantidad.selectedIndex].value;
    inputs[4].value = ticket.checked;
    alert("El producto se ha añadido");
  }
}


