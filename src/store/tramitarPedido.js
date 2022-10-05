const checkbox = document.querySelector('checkbox'); //checkbox
const datos_fact_ver = document.getElementById('datos_facturacion_ver') //formulario facturacion

// funcion para que desaparezca y desaparezca el formulario de datos de envío
function ocultaForm(){    
    if(datos_fact_ver.style.display === "none"){ //si no se ve
        datos_fact_ver.style.display="block";
    }else{
        datos_fact_ver.style.display="none"; //si se ve
    }
}

