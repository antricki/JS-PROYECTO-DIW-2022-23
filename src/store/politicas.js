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
// js para tramitar pedido, muestra una alerta tlf
var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
var alertTrigger = document.getElementById('liveAlertBtn')

function alert(message, type) {
  var wrapper = document.createElement('div')
  wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

  alertPlaceholder.append(wrapper)
}

if (alertTrigger) {
  alertTrigger.addEventListener('click', function () {
    alert('Para que se pongan en contacto contigo, la empresa de reparto, en caso de necesidad.', 'success')
  })
}
