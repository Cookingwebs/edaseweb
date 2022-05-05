@extends('layouts.plantilla-promo', ['chat' => $chat])

@section('title', 'Master')

@section('id-page', 'master-contador')

@section('content')
    
<div id="master_contador-page" class="--aula-abierta">
    <div class="--aside" id="b_header">
        <div class="--copy">
            <p class="--section_title">#LAGRANOPORTUNIDAD</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <h1 class="--title">MÁSTER ASESOR EXPERTO</h1>
           <h2 class="--subtitle">EDICIÓN ESPECIAL<br class="d-md-none"> MAYO DE 2022</h2>
           <p class="--extra">SOLICITA UNA DE LAS PLAZAS BECADAS<br class="d-none d-md-block"> ANTES DEL 17 DE MAYO</p>
           <div class="--contador">
            <div class="--contador-item" data="days">
                <p class="--contador-number" id="days"></p>
                <p id="__daysText">días</p>
            </div>
            <div class="--contador-item" data="hours">
                <p class="--contador-number" id="hours"></p>
                <p id="__hoursText">horas</p>
            </div>
            <div class="--contador-item" data="minutes">
                <p class="--contador-number" id="minutes"></p>
                <p id="__minutesText">minutos</p>
            </div>
            <div class="--contador-item" data="seconds">
                <p class="--contador-number" id="seconds"></p>
                <p id="__secondsText">segundos</p>
            </div>
            <script defer>
                document.addEventListener('DOMContentLoaded', () => { 
          
                  //===
                  // VARIABLES
                  //===
                  const DATE_TARGET = new Date('05/17/2022 0:01 AM');
                  // DOM for render
                  const SPAN_DAYS = document.querySelector('p#days');
                  const SPAN_HOURS = document.querySelector('p#hours');
                  const SPAN_MINUTES = document.querySelector('p#minutes');
                  const SPAN_SECONDS = document.querySelector('p#seconds');
                  // Milliseconds for the calculations
                  const MILLISECONDS_OF_A_SECOND = 1000;
                  const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
                  const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
                  const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24
          
                  //===
                  // FUNCTIONS
                  //===
          
                  /**
                  * Method that updates the countdown and the sample
                  */
                  function updateCountdown() {
                      // Calcs
                      const NOW = new Date()
                      if( NOW < DATE_TARGET){
                          const DURATION = DATE_TARGET - NOW;
                          const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
                          const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
                          const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
                          const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
                          // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)
              
                          // Render
                          SPAN_DAYS.textContent = REMAINING_DAYS;
                          SPAN_HOURS.textContent = REMAINING_HOURS;
                          SPAN_MINUTES.textContent = REMAINING_MINUTES;
                          SPAN_SECONDS.textContent = REMAINING_SECONDS;
                          if(REMAINING_DAYS == 1){
                              document.querySelector('p#__daysText').textContent = 'día';
                            }else{
                            document.querySelector('p#__daysText').textContent = 'días';
                          }
                          if(REMAINING_HOURS == 1){
                              document.querySelector('p#__hoursText').textContent = 'hora';
                            }else{
                            document.querySelector('p#__hoursText').textContent = 'horas';
                          }
                          if(REMAINING_MINUTES == 1){
                              document.querySelector('p#__minutesText').textContent = 'minuto';
                            }else{
                            document.querySelector('p#__minutesText').textContent = 'minutos';
                          }
                          if(REMAINING_SECONDS == 1){
                              document.querySelector('p#__secondsText').textContent = 'segundo';
                            }else{
                            document.querySelector('p#__secondsText').textContent = 'segundos';
                          }
                      }else{
                            SPAN_DAYS.textContent = '0';
                          SPAN_HOURS.textContent = '00';
                          SPAN_MINUTES.textContent = '00';
                          SPAN_SECONDS.textContent = '00';
                      }
                  }
          
                  //===
                  // INIT
                  //===
                  updateCountdown();
                  // Refresh every second
                  setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
              });
              </script>
           </div>
           <div class="--cta --go_form_down">REALIZAR SOLICITUD</div>
        </div>
    </div>

    <div class="--aside" id="b_punto">
        <div class="--copy">
            <p class="--section_title">PUNTO DE PARTIDA</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">PUNTO DE PARTIDA</p>
            <h2 class="--title js-scroll slide-left">ES HORA DE DARLE <br class="d-none d-md-block">UN GIRO A TU VIDA</h2>
            <p class="--subtitle js-scroll slide-left">SI ESTÁS EN ALGUNO<br> DE ESTOS CASOS:</p>
           <div class="--2_columns">
               <div class="--punto_bloque_copy js-scroll slide-left">
                    <h4 class="--punto_bloque_copy_title">BUSCAS UN EMPLEO <br>DE CALIDAD</h4>
                    <p class="--punto_bloque_copy_text">No estás dispuesto a seguir conformándote con puestos inferiores y contratos basura. </p>
               </div>
               <div class="--punto_bloque_copy js-scroll slide-right">
                    <h4 class="--punto_bloque_copy_title">TIENES ESTUDIOS <br>RELACIONADOS</h4>
                    <p class="--punto_bloque_copy_text">Te formaste en administración, finanzas, contabilidad, RRHH o derecho.</p>
               </div>
           </div>
           <div class="--2_columns">
               <div class="--punto_bloque_copy js-scroll slide-left">
                    <h4 class="--punto_bloque_copy_title">NECESITAS RENOVAR <br>TU FORMACIÓN</h4>
                    <p class="--punto_bloque_copy_text">Ya trabajas en el sector de la asesoría, pero te sientes limitado en algunas áreas.</p>
               </div>
               <div class="--punto_bloque_copy js-scroll slide-right">
                    <h4 class="--punto_bloque_copy_title">TE GUSTARÍA MONTAR <br>UNA ASESORÍA</h4>
                    <p class="--punto_bloque_copy_text">Quieres ofrecer servicios de asesoría a tus propios clientes, pero no sabes por dónde empezar.</p>
               </div>
           </div>
           <div class="--cta --go_form_down">SOLICITA TU PLAZA</div>
        </div>
    </div>

    <div class="--aside" id="b_ruta">
        <div class="--copy">
            <p class="--section_title">hoja de ruta</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">hoja de ruta</p>
            <h2 class="--title js-scroll slide-left">EMPIEZA AQUÍ TU<br class="d-none d-md-block"> GRAN OPORTUNIDAD</h2>
            <p class="--subtitle js-scroll slide-left">PREPÁRATE PARA TRABAJAR COMO ASESOR EXPERTO</p>

            <p class="--extra js-scroll slide-left">Con los profesionales de <br class="d-none d-md-block">la asesoría líder en España</p>
            <p class="--ruta-copy js-scroll slide-left">Aprenderás de la mano de especialistas en activo.</p>

            <p class="--extra js-scroll slide-left">9 MESES de especialización <br class="d-none d-md-block">Fiscal, laboral y contable</p>
            <p class="--ruta-copy js-scroll slide-left">Dominarás las 3 áreas con conocimientos teóricos y prácticos.</p>

            <p class="--extra js-scroll slide-left">3 MESES de prácticas <br class="d-none d-md-block">resolviendo casos de clientes reales</p>
            <p class="--ruta-copy js-scroll slide-left">Realizarás prácticas online en Ayuda T Pymes.</p>
        </div>
    </div>

    <div class="--aside" id="b_acceso">
        <div class="--copy">
            <p class="--section_title">acceso</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">acceso</p>
            <h2 class="--title js-scroll slide-left">ADEMÁS…</h2>
            <p class="--subtitle js-scroll slide-left">EL ACCESO A EDASE INCLUYE:</p>

            <div class="--2_columns">
                <div class="--acceso_bloque">
                    <p class="--extra js-scroll slide-left">Bolsa de empleo</p>
                    <p class="--acceso-copy js-scroll slide-left">Ofertas exclusivas en todo el país.</p>
                    <p class="--extra js-scroll slide-left">Campus online</p>
                    <p class="--acceso-copy js-scroll slide-left">Contenido en vídeo disponible 24/7.</p>
                    <p class="--extra js-scroll slide-left">Clases en directo</p>
                    <p class="--acceso-copy js-scroll slide-left">Sesiones con profesores y alumnos.</p>
                    <p class="--extra js-scroll slide-left">Tutorías personales</p>
                    <p class="--acceso-copy js-scroll slide-left">Atención individual y directa.</p>
                </div>
                <div class="--acceso_bloque">
                    <p class="--extra js-scroll slide-left">Herramientas</p>
                    <p class="--acceso-copy js-scroll slide-left">Ejercicios utilizando la última tecnología.</p>
                    <p class="--extra js-scroll slide-left">Formación continua</p>
                    <p class="--acceso-copy js-scroll slide-left">Plataforma de actualidad.</p>
                    <p class="--extra js-scroll slide-left">Diploma acreditativo</p>
                    <p class="--acceso-copy js-scroll slide-left">12 meses de experiencia avalada por Ayuda T Pymes.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="--aside" id="b_bonus">
        <div class="--copy">
            <p class="--section_title">#BONUS</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">#BONUS</p>
            
            <div class="--2_columns">
                <div class="--bonus_bloque">
                    <img src="{{ URL::to('/') }}/images/master/master-asesoria.webp" alt="" class="lazyload js-scroll slide-left">
                    <div class="--cta --go_form_down js-scroll slide-left">ME INTERESA</div>
                </div>
                <div class="--bonus_bloque">
                    <h2 class="--title js-scroll slide-right">¡EXCLUSIVO!<br class="d-none d-md-block"> Solo para<br class="d-none d-md-block"> esta edición<br class="d-none d-md-block"> de mayo</h2>
                    <p class="--subtitle js-scroll slide-right"><span>Seminario</span> experto en Creación y Dirección de Asesorías y Despachos.</p>
                    <p class="js-scroll slide-right">El primer paso para autoemplearte o conseguir un puesto directivo en la asesoría de empresas.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="--aside" id="b_experiencias">
        <div class="--copy">
            <p class="--section_title">EXPERIENCIAS </p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">EXPERIENCIAS</p>
            <!-- Slider main container -->
            <div class="swiper mySwiper --testimonio_1 js-scroll slide-left">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="--content_testimonios_copy">
                        <p class="--content_testimonios_quote">“Gracias a la escuela estoy <b>trabajando actualmente como asesora”</b></p>
                        <p class="--content_testimonios_author">Cristina Riaza</p>
                    </div>
                    <div class="--content_testimonios_foto">
                        <img src="{{ URL::to('/') }}/images/cristina-riaza.webp" alt="" class="lazyload">
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="--content_testimonios_copy">
                        <p class="--content_testimonios_quote">“Estudié Relaciones Laborales y RRHH y mis conocimientos se limitaban al área laboral. <b>El máster ha multiplicado mis posibilidades”</b></p>
                        <p class="--content_testimonios_author">Noelia Pérez</p>
                    </div>
                    <div class="--content_testimonios_foto">
                        <img src="{{ URL::to('/') }}/images/metodologia/noelia-perez.webp" alt="" class="lazyload">
                    </div>
                    <div></div>
                  </div>
                </div>
                <div class="swiper-button-next --testimonio_1_button_next"></div>
                {{-- <div class="swiper-button-prev"></div> --}}
            </div>
            <div class="swiper mySwiper --testimonio_mobile d-lg-none">
                <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Estudié Relaciones Laborales y RRHH y mis conocimientos se limitaban al área laboral. <b>El máster ha multiplicado mis posibilidades”</b></p>
                            <p class="--content_testimonios_author">Noelia Pérez</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/metodologia/noelia-perez.webp" alt="" class="lazyload">
                        </div>
                        <div></div>
                      </div>
                      <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Gracias a la escuela estoy <b>trabajando actualmente como asesora”</b></p>
                            <p class="--content_testimonios_author">Cristina Riaza</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/cristina-riaza.webp" alt="" class="lazyload">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Siempre me había llamado la atención la asesoría, pero en la carrera dejan pasar muchos aspectos. <b>Este máster sí te prepara para trabajar”</b></p>
                            <p class="--content_testimonios_author">Juan Mayan</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/master/juan-mayan.webp" alt="" class="lazyload">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Además de formarte te dan una <b>salida laboral”</b></p>
                            <p class="--content_testimonios_author">Laura Vidal</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/laura-vidal.webp" alt="" class="lazyload">
                        </div>
                        <div></div>
                      </div>
                </div>
                <div class="swiper-button-next --testimonio_mobile_button_next"></div>
                {{-- <div class="swiper-button-prev"></div> --}}
            </div>

            <div class="swiper mySwiper --testimonio_2 js-scroll slide-right">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <div></div>
                      <div class="--content_testimonios_foto">
                        <img src="{{ URL::to('/') }}/images/master/juan-mayan.webp" alt="" class="lazyload">
                      </div>
                      <div class="--content_testimonios_copy">
                        <p class="--content_testimonios_quote">“Siempre me había llamado la atención la asesoría, pero en la carrera dejan pasar muchos aspectos. <b>Este máster sí te prepara para trabajar”</b></p>
                        <p class="--content_testimonios_author">Juan Mayan</p>
                    </div>
                  </div>
                  <div class="swiper-slide">
                        <div></div>
                      <div class="--content_testimonios_foto">
                        <img src="{{ URL::to('/') }}/images/laura-vidal.webp" alt="" class="lazyload">
                      </div>
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Además de formarte te dan una <b>salida laboral”</b></p>
                            <p class="--content_testimonios_author">Laura Vidal</p>
                        </div>
                  </div>
                </div>
                <div class="swiper-button-prev --testimonio_2_button_prev"></div>
              </div>
            </div>
              
        </div>

        <div class="--aside" id="b_programa">
            <div class="--copy">
                <p class="--section_title">PROGRAMA </p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <p class="--section_title d-xl-none">PROGRAMA</p>
               <h2 class="--title js-scroll slide-left">¿QUIERES<br class="d-md-none"> SABER MÁS?</h2>
               <p class="--subtitle js-scroll slide-left">CONSULTA NUESTRO<br class="d-md-none"> <b>PLAN DE ESTUDIOS</b></p>
               <div class="--3_columns">
                   <div class="--programa_copy js-scroll fade-in">
                       <h3 class="--programa_title">LABORAL</h3>
                       <p>Aprenderás a gestionar y asesorar a tus clientes sobre todas las obligaciones del derecho laboral.</p>
                   </div>
                   <div class="--programa_copy js-scroll fade-in">
                       <h3 class="--programa_title">CONTABLE</h3>
                       <p>Descubrirás desde dentro cómo trabaja un departamento contable y cómo funciona su organización. </p>
                   </div>
                   <div class="--programa_copy js-scroll fade-in">
                       <h3 class="--programa_title">FISCAL</h3>
                       <p>Conseguirás controlar todos los procedimientos fiscales que afectan a autónomos y empresas.</p>
                   </div>
               </div>
               <div class="--cta_sub js-scroll slide-left">DESCARGAR</div>
               <div class="--cta js-scroll slide-left">
                    <a href="/dossier/EDASE_Master_asesor_experto.pdf" target="_blank">PROGRAMA</a>
                </div>
            </div>
        </div>
        <div class="--aside" id="b_practicas">
            <div class="--copy">
                <p class="--section_title">EMPIEZA</p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <p class="--section_title d-xl-none">EMPIEZA</p>
               <h2 class="--title js-scroll slide-left">3 PASOS TE SEPARAN<br> DE TU FUTURO</h2>
               <div class="--transition_niveles js-scroll slide-right" id="__transition_niveles">
                <div class="--content_transition" data="1">
                    <div class="--b_title_transition">
                        <h3 class="--active" data="1">01. FORMULARIO</h3>
                        <h3 data="2">02. ENTREVISTA</h3>
                        <h3 data="3">03. MATRÍCULA</h3>
                    </div>
                    <div class="--b_copy_transition">
                        <p class="--active" data="1">Completa el formulario que hay al final de esta página para solicitar tu beca.</p>
                        <p data="2">Te llamaremos para conocer tu perfil y atender tus consultas.</p>
                        <p data="3">Te avisaremos de si has conseguido o no tu beca y podrás matricularte para unirte al máster de asesor experto.</p>
    
                    </div>
                </div>
                <div class="--b_foto_transition">
                    <img src="{{ URL::to('/') }}/images/promo/master-contador/empieza.webp" alt="" data="1" class="--active lazyload">
                    <img src="{{ URL::to('/') }}/images/promo/master-contador/empieza_2.webp" alt="" data="2" class="lazyload">
                    <img src="{{ URL::to('/') }}/images/promo/master-contador/empieza_3.webp" alt="" data="3" class="lazyload">
                </div>
                <div class="--mascara_transition">
                </div>
                <div class="--progress_transition" data="1"></div>
                </div>
                <div class="--cta --go_form_down">EMPIEZA AQUÍ</div>
            </div>
        </div>

        <div class="--aside" id="b_faqs">
            <div class="--copy">
                <p class="--section_title">¿ALGUNA DUDA?</p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <p class="--section_title d-xl-none">¿ALGUNA DUDA?</p>
                <h2 class="--title js-scroll slide-left">PREGUNTAS FRECUENTES</h2>
                <div class="--faqs-item">
                    <p class="--faqs-item-title js-scroll fade-in">
                        <span>01.</span> ¿PUEDO CONVERTIRME EN ASESOR SIN TENER CONOCIMIENTOS DE ASESORÍA?  
                    </p>
                    <div class="--faqs-item-content js-scroll fade-in">
                        <p>Sí, para acceder a nuestra Escuela de Asesores no hace falta que tengas conocimientos previos. Nosotros nos encargaremos de analizar tu perfil para aconsejarte el camino que más se ajuste a ti.</p>
                    </div>
                </div>
                <div class="--faqs-item">
                    <p class="--faqs-item-title js-scroll fade-in">
                        <span>02.</span> ¿TENDRÉ TIEMPO PARA REALIZAR LA FORMACIÓN SI ESTOY TRABAJANDO?
                    </p>
                    <div class="--faqs-item-content js-scroll fade-in">
                        <p>¡Sí! El 70% de nuestros alumnos compatibiliza la formación con su trabajo. En el campus virtual tendrás el contenido disponible las 24h al día y subiremos las clases en directo grabadas, para que puedas organizar tu tiempo de estudio como mejor te venga.</p>
                        <p>De todas formas, si en algún momento no puedes seguir el ritmo del programa, tan solo con comentárselo al equipo docente y nos adaptaremos a ti.</p>
                    </div>
                </div>
                <div class="--faqs-item">
                    <p class="--faqs-item-title js-scroll fade-in">
                        <span>03.</span> PREFIERO LA FORMACIÓN PRESENCIAL, ¿CÓMO VOY A CONSULTAR MIS DUDAS SI TODO ES ONLINE?
                    </p>
                    <div class="--faqs-item-content js-scroll fade-in">
                        <p>Aunque la formación es 100% online, no vas a estar solo. </p>
                        <p>Te ofrecemos diferentes formas para consultar tus dudas y hablar con tus profesores. Puedes elegir entre el teléfono, el sistema de consultas de la plataforma, WhatsApp y las sesiones personales online. </p>
                    </div>
                </div>
                <div class="--faqs-item">
                    <p class="--faqs-item-title js-scroll fade-in">
                        <span>04.</span> ¿QUÉ TENGO QUE HACER PARA CONSEGUIR UNA BECA?
                    </p>
                    <div class="--faqs-item-content js-scroll fade-in">
                        <p>¡El primer paso es que contactes con nosotros!</p>
                        <p>Te llamaremos para realizarte una entrevista telefónica, y si vemos que cumples los requisitos que estamos buscando para incorporar a nuestra Cantera de asesores, te garantizaremos una de nuestras becas para que puedas especializarte al menor coste.</p>
                    </div>
                </div>
            </div>
        </div>

    <div class="--aside" id="b_formulario_footer">
        <div class="--copy">
            <p class="--section_title">FORMULARIO</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --bottom">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <div class="--2_columns">
               <div class="--formulario_claim js-scroll slide-left">
                    <h2 class="--title">¡Becas<br class="d-md-none d-xl-block">
                        limitadas! <br>
                        <span>Solicita <br class="d-md-none d-xl-block">
                        la tuya antes <br class="d-md-none d-xl-block">
                        del 17 de mayo.</span></h2>
                    <p class="--text">Si quieres optar a una beca para formarte en la edición especial de mayo del máster asesor experto, rellena el formulario.</p>
               </div>
               <div class="--formulario_form js-scroll slide-right">
                    <p class="--form_title">Súmate a <span>#LaGranOportunidad.</span></p>
                    @include('layouts.form-footer', ['cta_copy' => 'SOLICITAR BECA'])
               </div>
           </div>
        </div>
    </div>
</div>

@endsection