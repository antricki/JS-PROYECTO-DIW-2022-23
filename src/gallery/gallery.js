const images = document.querySelectorAll('img');
const dLeft = document.getElementById('dotLeft');
const dRight = document.getElementById('rightLeft');


dLeft.addEventListener('click', (e) => {
    dLeft.classList.toggle('active');
    //añadir animación
})