const checkbox = document.querySelector('check_form'); //checkbox
const datos_fact_ver = document.getElementById('datos_facturacion_ver') //formulario facturacion

// funcion para que desaparezca y desaparezca el formulario de datos de envío
function ocultaForm() {
    if (datos_fact_ver.style.display === "none") { //si no se ve
        datos_fact_ver.style.display = "block";
    } else {
        datos_fact_ver.style.display = "none"; //si se ve

    }

}
// función y variables para pintar el fondo verde del método de pago según el que elija
// variables de los radios, que me sirven para añadirles el evento posterior
const entrega1 = document.querySelector('.check_entrega1');
const entrega2 = document.querySelector('.check_entrega2');

// variables del contenedor donde están los radios
const tipo_entrega1 = document.getElementById('tipo__entrega1');
const tipo_entrega2 = document.getElementById('tipo__entrega2');

entrega1.addEventListener('click', (e) => {
    //si hago click en el radio primero, se añade la clase tipo_entrega1 en el primer 
    //contenedor y cambia el fondo a verde.
    tipo_entrega1.classList.add('tipo__entrega1');
    tipo_entrega2.classList.remove('tipo__entrega1');
    tipo_entrega2.classList.add('hidden')
})
entrega1.addEventListener('dblclick', (e) => {
    //si hago doble click en el radio primero, aliminamos el hidden en el primer
    //contenedor. Y de ese modo volvera aparecer las dos elecciones
    tipo_entrega1.classList.add('tipo__entrega1');
    tipo_entrega2.classList.remove('tipo__entrega1');
    tipo_entrega2.classList.remove('hidden')
})
entrega2.addEventListener('click', (e) => {
    //lo mismo que el anterior pero con el segundo contenedor y segundo radio.
    tipo_entrega2.classList.add('tipo__entrega1');
    tipo_entrega1.classList.remove('tipo__entrega1');
    tipo_entrega1.classList.add('hidden')
})
entrega2.addEventListener('dblclick', (e) => {
    //si hago doble click en el segundo primero, aliminamos el hidden en el primer
    //contenedor. Y de ese modo volvera aparecer las dos elecciones
    tipo_entrega2.classList.add('tipo__entrega1');
    tipo_entrega1.classList.remove('tipo__entrega1');
    tipo_entrega1.classList.remove('hidden')

})

// comprobar formulario de datos de contacto

const boton = document.getElementById('enviar');

boton.addEventListener('click', (e) => {
    e.preventDefault();
    // variables del primer formulario
    let nombre = document.getElementById('nombre').value;
    let apellidos = document.getElementById('apellidos').value;
    let tlf = document.getElementById('telefono').value;
    let calle = document.getElementById('calle').value;
    let ciudad = document.getElementById('ciudad').value;
    let cp = document.getElementById('codigoPostal').value;
    let pais = document.getElementById('pais').value;

    if (!/^[a-zA-Z]/.test(nombre)) {
        alert("El nombre no puede estar vacío o no puede contener números")
    } else if (!/^[a-zA-Z]/.test(apellidos)) {
        alert("Los apellidos son necesarios")
    } else if (isNaN(tlf)) {
        alert("El telefono deben ser todo números")
    } else if (isNaN(cp)) {
        alert("El Código Postal no es válido")
    } else if (!/^[a-zA-Z]/.test(ciudad)) {
        alert("La ciudad no puede contener números")
    } else if (!/^[a-zA-Z]/.test(pais)) {
        alert("El país no puede contener números")
    } else {
        alert("Todos los datos se han enviado correctamente")
        escribirDireccion(nombre, apellidos, tlf, calle, ciudad, cp, pais)
    }

})
const formuInicial = document.getElementById('form_inicial')
function escribirDireccion(nombre, apellidos, tlf, calle, ciudad, cp, pais) {
    formuInicial.classList.add('hidden')
    const caja = document.getElementById('direccion_escrita')
    let p1 = document.createElement("p")
    p1.textContent = `${nombre} ${apellidos}`
    let p2 = document.createElement("p")
    p2.textContent = `${tlf}`
    let p3 = document.createElement("p")
    p3.textContent = `${calle}  ${cp}`
    let p4 = document.createElement("p")
    p4.textContent = `${ciudad}  ${pais}`
    caja.appendChild(p1)
    caja.appendChild(p2)
    caja.appendChild(p3)
    caja.appendChild(p4)
}

//  comprobar formulario de metodo de pago "la tarjeta"

const botonValida = document.getElementById('valida_tarjeta')

botonValida.addEventListener('click', (e) => {
    e.preventDefault()
    console.log('validando')
    // variables del formulario tarjeta
    let nom = document.getElementById('nombreYapellidos').value
    let nTarjeta = document.getElementById('nTarjeta').value
    let mes = document.getElementById('mes').value
    let cvc = document.getElementById('cvc')
    if (!/^[a-zA-Z]/.test(nom)) {
        alert('El nombre de la tarjeta no es correcto')
    }
})

function validaTarjeta(nTarjeta) {
    numT = nTarjeta.replace('-', '');
}




