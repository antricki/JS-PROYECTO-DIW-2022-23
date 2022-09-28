//DECLARACIÓN DE CONSTANTES

//Contenedor con todas las imágenes
const images = document.getElementById('images');

//Identificamos los botones
const dLeft = document.getElementById('dotLeft');
const dRight = document.getElementById('dotRight');


//EVENTOS

//Evento botón izquierdo
dLeft.addEventListener('click', (e) => {
    //Identificamos el primer elemento
    const imgFirst = document.querySelectorAll('.img')[0];
    
    //Aplicamos la animación
    images.style.transition = "transform .5s linear";
    images.style.transform = "translateX(-340px)";     
    
    //Colocamos la primera imagen en última posición
    setTimeout(() =>{    
        images.insertAdjacentElement('beforeend', imgFirst);    
        images.style.transition = "none";        
        images.style.transform = "translateX(0px)";
    },500);
})

//Evento botón derecho
dRight.addEventListener('click', (e) => {
    //Identificamos el último elemento
    const img = document.querySelectorAll('.img');
    const imgLast = img[img.length - 1];

    //Aplicamos la animación
    images.style.transition = "transform 1s linear";
    images.style.transform = "translateX(240px)";
    actualizarEstilos();  
    
    
    //Colocamos la útlima imagen en primera posición
    setTimeout(() =>{        
        images.style.transition = "none";
        images.insertAdjacentElement('afterbegin', imgLast);
        images.style.transform = "translateX(0px)";
        
    },1000);
})

const actualizarEstilos = () => {
    const img = document.querySelectorAll('.img');
    const n = (Math.round(img.length / 2)) - 2;
    console.log(n)
    const big = img[n];
    const normal = [img[(n-1)], img[(n+1)]];
    // const small = [img[(n-2)], img[(n+2)]];
    img.forEach((image) => {
        image.classList.remove('img--big', 'img--normal');
    })
    big.classList.add('img--big');
    normal.forEach((image) => {
        image.classList.add('img--normal');
    })


}