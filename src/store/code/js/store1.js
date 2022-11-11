const banner_desaparece = document.getElementById('banner_desaparece');
const banner_aparece = document.getElementById('banner_aparece');

var scrollPos = 0;
window.addEventListener('scroll', function(){
    if ((document.body.getBoundingClientRect()).top > scrollPos) {
          // ARRIBA
          banner_aparece.classList.add('banner_aparece');
          banner_desaparece.classList.remove('banner_aparece');
    } else {
            // ABAJO
        scrollPos = (document.body.getBoundingClientRect()).top;
        banner_aparece.classList.remove('banner_aparece');
        banner_desaparece.classList.add('banner_aparece');
    }
});
