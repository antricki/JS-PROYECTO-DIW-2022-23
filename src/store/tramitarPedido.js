const datos_fact_envio = document.getElementById("misma_direccion"); //checkbox
const datos_fact = document.getElementById('datos_facturacion_ver') //formulario facturacion


// evento para que aparezca y desaparezca el nuevo formulario para la facturacion
datos_fact_envio.addEventListener('click', (e)=>{
    if(datos_fact_envio.checked){
        datos_fact.classList.add('datos_facturacion_hidden');
    }
})
