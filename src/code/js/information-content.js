let vessel = document.getElementById('info-vessel')
let radios = document.querySelectorAll('.js-radio')

function setVessel(str) {
  vessel.innerHTML = ''
  vessel.innerHTML = str
}

function uncheckRadios() {
  radios.forEach(radio => {
    radio.checked = false
  })
}

//El departamento section
//objetivo radio
function objetivo() {
  const str = `<h1 class="mt-2">Objetivo</h1>
    <h3>Del centro</h3>
    <h3 class="mt-4">
        Misión <span>(Presente)</span>
    </h3>
    <p>
        Nuestro cometido es formar a futuros <span>profesionales</span> muy bien preparados con una enseñanza de <span>calidad</span>, y una formación
        <span>polivalente</span> y continuada, basada en las nuevas <span>tecnologías</span>, asumiendo con éxito la <span>responsabilidad</span> que
        supone la formación para el <span>empleo</span>, tanto en su vertiente <span>reglada</span> como en su enfoque para el mundo laboral
    </p>
    <h3 class="mt-4">
        Visión <span>(Futuro)</span>
    </h3>
    <p>
        Queremos ser <span>referentes</span> de una Formación Profesional de <span>calidad</span>, tanto a nivel autonómicoo, como estatal, con proyección
        <span>europea</span>. Una gran familia de familias profesionales.
    </p>
    <h3 class="mt-4">
        Valores
    </h3>
    <ul>
        <li><span>Superación</span> y <span>Liderazgo</span></li>
        <li><span>Pertenencia</span></li>
        <li><span>integridad</span> Profesional</li>
        <li><span>Innovación</span></li>
        <li><span>Diversidad</span></li>
    </ul>`

  setVessel(str)
}

//horario radio
function horario() {
  const str = `<h1 class="mt-2">Horario</h1>
    <h3>Del centro</h3>
    <p class="mt-4">
        Se imparten en <span>turno de mañanas</span> las siguientes enseñanzas:
    </p>
    <ul>
        <li>FP <span>presencial</span> de todas las familias profesionales</li>
        <li>Enseñanzas <span>deportivas</span> de régimen especial</li>
    </ul>
    <p>
        Se imparten en <span>turno de tardes</span> las siguientes enseñanzas:
    </p>
    <ul>
        <li>FP <span>semipresencial</span> (Educación medioambiental)</li>
        <li>Algunas clases de FP presencial familia <span>transporte</span> y mantenimiento de vehículos (Aeronaves)</li>
        <li>Enseñanzas <span>deportivas</span> de régimen especial</li>
        <li>Cursos de formación para el <span>empleo</span></li>
    </ul>
    `

  setVessel(str)
}

//innovacion radio
function innovación() {
  const str = `<h1 class="mt-2">Innovación</h1>
        <h3>En el Centro Integrado de FP de Cheste</h3>
        <p class="mt-4">
            Desde el centro integrado de FP de Cheste se <span>ponen en marcha</span> cada curso escolar, desde los distintos departamentos, <span>innumerables 
            iniciativas</span> de innovación (proyectos, cursos, jornadas, congresos, eventos, etc), las cuales buscan <span>motivar</span> y <span>motivar</span> tanto
            al profesorado como al alumnado de las distintas especialidades que el centro imparte.
            <br>
            Estos protectos <span>abarcan temas tan diversos</span> como: la búsqueda proactiva de <span>empleo</span> y el <span>emprendedurismo</span>, la formación
            profesional del alumnado, congresos nacionales de failias profesionales, la <span>biodiversidad</span>, la <span>seguridad</span> informáticaen los tiempos
            actuales, etc.
            <br>
            La zona de innovación de la página Web del Centro Integrado de FP de Cheste pretende <span>mostrar</span> a toda la comunidad educativa distintas <span>iniciativas
            </span> de innovación realizadas desde este centro.
        </p>`

  setVessel(str)
}

//cursos section
//ofertaformativa radio
function ofertaformativa() {
  const str = `<h1 class="mt-2">Grado Superior</h1>
        <h3>Estudios semipresenciales</h3>
        <p class="mt-4">
            Según el <span>decreto</span> 115/2008 del 1 de agosto del <span>consell</span> por el que se regulan los centros de formación profesional en la 
            Comunidad Valenciana nos basamos para ofrecer los grados de:
        </p>
        <ul>
            <li><span>DAW</span> Desarrollo de Aplicaciones Web</li>
            <li><span>DAM</span> Desarrollo de Aplicaciones Multiplataforma</li>
            <li><span>ASIR</span> Administración de Sistemas Informáticos en Red</li>
            <li><span>SMR</span> Sistemas Microinformáticos y Redes</li>
        </ul>
        <span><a href="courses/courses.php">Mas información</a></span>`

  setVessel(str)
}

//semipresencial radio
function semipresencial() {
  const str = `<h1 class="mt-2">Grado Superior</h1>
        <h3>Estudios semipresenciales</h3>
        <p class="mt-4">
            En el centro proporcionamos la oportunidad de que los alumnos estudien de forma semipresencial el grado de DAM (Diseño de aplicaciones Multiplataforma)
        </p>
        `

  setVessel(str)
}
//certificadoprofesionalidad radio
function certificadoprofesionalidad() {
  const str =
    '<h1 class="mt-2">Formación para el empleo</h1>' +
    '<h3>Certificados de profesionalidad</h3>' +
    '<p class="mt-4">Un <span>Certificado de Profesionalidad</span> es aquel documento mediante el que se <span>acredita </span>' +
    'oficialmente las <span>competencias </span>necesarias <span>para el desarrollo de una actividad laboral.</span> El certificado reconoce un ' +
    'determinado perfil profesional que comprende un conjunto de competencias identificables dentro del sistema productivo ' +
    'y que son reconocidas y valoradas en el mercado laboral. Una vía para la obtención de estos certificados son los <span>cursos ' +
    'de formación para el empleo </span>que se imparten todos los años en el CIPFP CHESTE en colaboración con el Servicio Valenciano ' +
    'de Empleo y Formación y la Oficina de empleo de Chiva, totalmente gratuitos, con beca de transporte y que van dirigidos ' +
    '<span>preferentemente</span> a desempleados, aunque podemos tener una visión más amplia y pensar en ellos como una oportunidad para una ' +
    'formación continua de todos nosotros, incluso como una especialización dentro de nuestro sector.</p>'

  setVessel(str)
}

//Location map
function showMap() {
  uncheckRadios()
  vessel.innerHTML = ''

  let mapContainer = document.createElement('div')
  mapContainer.setAttribute('id', 'mapContainer')

  let div = document.createElement('div')
  div.setAttribute('id', 'map')
  div.style.border = '2.5px solid #F5A25D'

  mapContainer.appendChild(div)
  vessel.appendChild(mapContainer)

  let map = L.map('map').setView([39.4788225, -0.6453598], 13)
  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
  }).addTo(map)

  L.marker([39.4788225, -0.6453598]).addTo(map).bindPopup('CIPFP FP Cheste')
}

//contact form
function contact() {
  uncheckRadios()

  let form = `
    <div class="row" id="contactForm">
        <div class="col-xl-6">
            <form action="" class="text-start p-4">
                <div class="mb-2 row">
                    <div class="col-12"> 
                        <!--<label for="contactFullName" class="form-label">Nombre completo</label>--> 
                        <input type="text" class="form-control" id="contactFullName" placeholder="Nombre completo"> 
                    </div> 
                </div>
                <div class="mb-2 row">
                    <div class="col-lg-7 pe-lg-2"> 
                        <!--<label for="contactEmail" class="form-label">Email</label>-->
                        <input type="email" class="form-control" id="contactEmail" placeholder="Email"> 
                    </div> 
                    <div class="d-block d-lg-none mb-2"></div>
                    <div class="col-lg-5 ps-lg-0"> 
                        <!--<label for="contactPhoneNum" class="form-label">Número de teléfono</label>-->
                        <input type="tel" class="form-control" id="contactPhoneNum" placeholder="Teléfono"> 
                    </div> 
                </div>
                <div class="mb-2 row">
                    <div class="col-12 mb-2"> 
                        <!--<label for="contactSubject" class="form-label">Asunto</label> -->
                        <input type="text" class="form-control" id="contactSubject" placeholder="Asunto"> 
                    </div> 
                    <div class="col-12"> 
                        <textarea class="form-control" placeholder="Mensaje" id="contactTextArea"></textarea>
                    </div> 
                </div>
                <button type="button" class="btn infoButton" onlclick="verifyForm()">Enviar mensaje</button>
            </form>
        </div>

        <!--right side-->
        <div class="d-none d-xl-block col-xl-6">
        <img src="assets/images/contactSection.png" class="w-100 d-block">
        </div>
    </div>
    `

  setVessel(form)
}
