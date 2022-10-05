function contarProductos(){
const checks=document.querySelectorAll('.form-check-input');
var prodSubtotal=0;
checks.forEach(check => {
    if (check.checked) {
        prodSubtotal++;
    }
});
const subtotales=document.querySelectorAll('span.numProductos')
subtotales.forEach(subtotal => {
    subtotal.textContent=prodSubtotal;
});
}


function eliminarProducto(producto,enlace){
    document.getElementById(producto).style.display = "none";
    document.getElementById(enlace).style.display = "inline";
}