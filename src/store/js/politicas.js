const botones = document.getElementById('buttons_hidden');
const textArea = document.getElementById('text_area');
const enviar = document.getElementById('enviar');
const textThanks = document.getElementById('text_thanks');

botones.addEventListener('click', (e)=>{
    botones.classList.add('div_hidden');
    textArea.classList.remove('div_hidden');
});

enviar.addEventListener('click', ()=>{
    textArea.classList.add('div_hidden');
    textThanks.classList.remove('div_hidden');
})

// js para tooltip tlf
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

