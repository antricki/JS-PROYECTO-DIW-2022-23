//DECLARACIÓN DE CONSTANTES

//Contenedor con todas las imágenes
const images = document.getElementById("images");

//Identificamos los botones
const dLeft = document.getElementById("dotLeft");
const dRight = document.getElementById("dotRight");

//EVENTOS

//Función antirrebote
const debounce = (func, delay) => {
  let debounceTimer;
  return function () {
    const context = this;
    const args = arguments;
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => func.apply(context, args), delay);
  };
};

//Evento botón izquierdo
dLeft.addEventListener(
  "click",
  debounce(() => {
    //Identificamos el primer elemento
    const imgFirst = document.querySelectorAll(".img")[0];

    //Aplicamos la animación
    images.style.transition = "transform .5s linear";
    images.style.transform = "translateX(-240px)";
    actualizarEstilos("left");

    //Colocamos la primera imagen en última posición
    setTimeout(() => {
      images.insertAdjacentElement("beforeend", imgFirst);
      images.style.transition = "none";
      images.style.transform = "translateX(0px)";
    }, 500);
  }, 3000)
);

//Evento botón derecho
dRight.addEventListener("click", debounce(() => {
  //Identificamos el último elemento
  const img = document.querySelectorAll(".img");
  const imgLast = img[img.length - 1];

  //Aplicamos la animación
  images.style.transition = "transform .5s linear";
  images.style.transform = "translateX(240px)";
  actualizarEstilos("right");

  //Colocamos la útlima imagen en primera posición
  setTimeout(() => {
    images.insertAdjacentElement("afterbegin", imgLast);
    images.style.transition = "none";
    images.style.transform = "translateX(0px)";
  }, 500);
}, 300)
);

const actualizarEstilos = (direcction) => {
  const img = document.querySelectorAll(".img");
  const n =
    direcction === "right"
      ? Math.round(img.length / 2) - 2
      : Math.round(img.length / 2);
  const big = img[n];
  const normal = [img[n - 1], img[n + 1]];
  // const small = [img[(n-2)], img[(n+2)]];
  img.forEach((image) => {
    image.classList.remove("img--big", "img--normal");
  });
  big.classList.add("img--big");
  normal.forEach((image) => {
    image.classList.add("img--normal");
  });
};
