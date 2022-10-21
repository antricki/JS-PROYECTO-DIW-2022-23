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
    //contenedor y cambia el fondo a gris.
    tipo_entrega1.classList.add('tipo__entrega1');
    tipo_entrega2.classList.remove('tipo__entrega1');
})
entrega2.addEventListener('click', (e) => {
    //lo mismo que el anterior pero con el segundo contenedor y segundo rario.
    tipo_entrega2.classList.add('tipo__entrega1');
    tipo_entrega1.classList.remove('tipo__entrega1');
})

// comprobar formulario
const nombre = document.getElementById('nombre').value;
const apellidos = document.getElementById('apellidos').value;
const tlf = document.getElementById('telefono').value;
const calle = document.getElementById('calle').value;
const ciudad = document.getElementById('ciudad').value;
const cp = document.getElementById('codigoPostal').value;
const pais = document.getElementById('pais').value;

const boton = document.getElementById('enviar');

boton.addEventListener('click', (e) => {
    e.preventDefault();
    if(apellidos.length == 0){
        console.log("Debes rellenar todos los campos");
    }
    if(!isNaN(nombre)){
        console.log("el nombre no puede contener números");
    }
    if(!isNaN(apellidos)){
        console.log("los apellidos no pueden contener números");
    }
    if(isNaN(tlf)){
        console.log("El telefono deben ser todo números");
    }
    if(isNaN(cp)){
        console.log("El Código Postal no es válido");
    }
    


})



