@extends('layouts.plantilla-promo')

@section('title', 'Puertas Abiertas')

@section('id-page', 'lanzamiento')

@section('content')
<div id="lanzamiento-page" class="--puertas-abiertas">
    <div class="--aside" id="b_header">
        <div class="--copy">
            <p class="--section_title">apúntate</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <h1 class="--title">APÚNTATE A LA PRESELECCIÓN Y<br class="d-none d-md-block"> <b class="--blue">CONSIGUE UNA BECA</b> <br class="d-none d-md-block"> PARA FORMARTE Y <br class="d-none d-md-block"> <b class="--green">TRABAJAR COMO ASESOR</b></h1>
           <h2 class="--subtitle"><span>SOLO 100 BECAS DISPONIBLES</span> <br>del 50%, 70%, 90% y hasta del 100%</h2>
           <div class="--cta --go_form_down">RESERVA TU PLAZA</div>
        </div>
    </div>

    <div class="--aside" id="b_jornada">
        <div class="--copy">
            <p class="--section_title">puertas abiertas</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">puertas abiertas</p>
           <div class="--2_columns">
               <div class="--master_img d-none d-md-block">
                <div class="ratio ratio-16x9">
                    <iframe src="https://player.vimeo.com/video/737449508?h=102e59328d&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="fullscreen; picture-in-picture" allowfullscreen title="GO_Directo_Contabilida.mp4"></iframe><script src="https://player.vimeo.com/api/player.js"></script>
                  </div>
                <div class="--cta --go_form_down">INSCRÍBETE</div>
               </div>
               <div class="--master_copy_1">
                    <h2 class="--title">SEMANA DE<br> PUERTAS ABIERTAS</h2>
                    <div class="ratio ratio-16x9 d-md-none">
                        <iframe src="https://player.vimeo.com/video/737449508?h=102e59328d&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="fullscreen; picture-in-picture" allowfullscreen title="GO_Directo_Contabilida.mp4"></iframe><script src="https://player.vimeo.com/api/player.js"></script>
                      </div>
                    <p class="--subtitle">29 DE AGOSTO > 6 DE SEPTIEMBRE</p>
                    <p class="--text_1"><b>Accede gratis</b> a una semana de nuestra formación interna para descubrir si te gustaría trabajar en nuestro sector y que nosotros veamos todo tu potencial.</p>
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_bolsa">
        <div class="--copy">
            <p class="--section_title">bolsa de empleo </p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">bolsa de empleo </p>
            <p class="--title">QUEREMOS FORMAR A <br><b>LOS ASESORES DE 2023</b></p>
            <p class="--subtitle"><span>+</span> ESPERAMOS UNA GRAN DEMANDA DE PERFILES CUALIFICADOS</p>
            <div class="--2_columns --b_1">
                <div class="--oportunidad_copy_1">
                    <p><b>Ante esta previsión, necesitamos incorporar urgentemente nuevos candidatos a nuestra bolsa de empleo.</b></p>
                    <p>Buscamos a personas con estudios relacionados con administración, derecho, contabilidad, fiscalidad, RRHH o relaciones laborales.</p>
                 </div>
                <div class="--oportunidad_img">
                    <img src="{{ URL::to('/') }}/images/lanzamiento/puertas_abiertas-1.webp" alt="" class="lazyload">
                </div>
            </div>
        </div>
    </div>

    <div class="--aside" id="b_consigues">
        <div class="--copy">
            <p class="--section_title">quÉ consigues</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">quÉ consigues</p>
            <p class="--title">¿QUÉ CONSEGUIRÁS CON TU BECA? <br class="d-none d-lg-block">ACCESO AL MÁSTER ASESOR EXPERTO</p>
            <div class="--2_columns --b_1">
                <div class="--b_consigues-copy">
                    <p class="--b_consigues-copy-title">FISCAL, LABORAL Y CONTABLE</p>
                    <p class="--b_consigues-copy-text">9 meses de especialización en las tres áreas de trabajo.</p>
                </div>
                <div class="--b_consigues-copy">
                    <p class="--b_consigues-copy-title">ONLINE Y FLEXIBLE</p>
                    <p class="--b_consigues-copy-text">Contenido en vídeo disponible 24/7 en el campus virtual.</p>
                </div>
                <div class="--b_consigues-copy">
                    <p class="--b_consigues-copy-title">BOLSA DE EMPLEO</p>
                    <p class="--b_consigues-copy-text">Ofertas exclusivas de nuestra red nacional de asesorías y despachos.</p>
                </div>
                <div class="--b_consigues-copy">
                    <p class="--b_consigues-copy-title">PRÁCTICAS INCLUIDAS</p>
                    <p class="--b_consigues-copy-text">3 meses de prácticas resolviendo casos de clientes reales.</p>
                </div>
                <div class="--b_consigues-copy">
                    <p class="--b_consigues-copy-title">TEMARIO ACTUALIZADO</p>
                    <p class="--b_consigues-copy-text">Tus docentes son asesores en activo que mantienen la formación al día.</p>
                </div>
                <div class="--b_consigues-copy">
                    <p class="--b_consigues-copy-title">SOPORTE Y TUTORÍAS</p>
                    <p class="--b_consigues-copy-text">Asistencia individual y directa por teléfono, chat o tutorías online.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="--aside" id="b_asignacion">
        <div class="--copy">
            <p class="--section_title">asignación de becas</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">asignación de becas</p>
            <p class="--title">100 PLAZAS BECADAS<br> <span>HASTA EL 100%</span></p>
            <div class="--b_asignacion-requisitos">
                <p class="--b_asignacion-requisitos-title">REQUISITOS</p>
                <ul>
                    <li>Ser mayor de 18 años</li>
                    <li>Tener nacionalidad española o residir en España</li>
                    <li>Estar inscrito en la Semana de Puertas Abiertas de EDASE</li>
                    <li>Contar con formación previa relacionada con el sector</li>
                    <li>Tener disponibilidad para incorporarse al máster asesor experto</li>
                    <li>Tener el compromiso de cumplir los objetivos de la formación</li>
                </ul>
            </div>
            <div class="--b_asignacion-pasos">
                <p class="--b_asignacion-pasos-title">PASOS PARA<br class="d-md-none"> CONSEGUIR LA BECA</p>
                <p class="--b_asignacion-pasos-subtitle"><span>01.</span> RESERVA TU PLAZA</p>
                <p class="--b_asignacion-pasos-copy">Apúntate a la preselección en la Semana de Puertas Abiertas enviando el formulario de esta página web.</p>
                <p class="--b_asignacion-pasos-subtitle"><span>02.</span> FÓRMATE GRATIS</p>
                <p class="--b_asignacion-pasos-copy">Aprende durante una semana aspectos imprescindibles del trabajo de un asesor y demuéstranos tus capacidades.</p>
                <p class="--b_asignacion-pasos-subtitle"><span>03.</span> CONSIGUE TU BECA</p>
                <p class="--b_asignacion-pasos-copy">Evaluaremos tu perfil en una entrevista personal y te confirmaremos si accedes a una de las diferentes plazas becadas del 50%, 70%, 90% y hasta del 100%.</p>
            </div>
            <p class="--extra">SOLICITUDES HASTA<br class="d-md-none"> EL 29 DE AGOSTO</p>
            <div class="--cta --go_form_down">QUIERO UNA PLAZA CON BECA</div>
        </div>
    </div>

    <div class="--aside" id="b_vida">
        <div class="--copy">
            <p class="--section_title">escuela de asesores</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <h3 class="--vida_title"><span><b>+ 1.000 PERSONAS</b></span> HAN ENCONTRADO <br>SU OPORTUNIDAD EN 2022</h3>
            <div class="--vida_bloque">
               <div class="--vida_fila_1">
                    <div class="--vida_fila_1_div_1">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria1.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_1_div_2">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria2.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_1_div_3">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria3.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                </div>
                <div class="--vida_fila_2">
                    <div class="--vida_fila_2_div_1">
                        <img src="{{ URL::to('/') }}/images/lanzamiento/puertas_abiertas-3.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_2_div_2">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria5.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_2_div_3">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria6.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_2_div_4">
                        <img src="{{ URL::to('/') }}/images/lanzamiento/puertas_abiertas-4.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_2_div_5">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria7.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
               </div>
            </div>
            <div class="--vida_bloque_mobile">
                <div class="--vida_bloque_img --active">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria1.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria2.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria3.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/lanzamiento/puertas_abiertas-3.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria5.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria6.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/lanzamiento/puertas_abiertas-4.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria7.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
            </div>
        </div>
    </div>

    <div class="--aside" id="b_experiencias">
        <div class="--copy">
            <p class="--section_title">TESTIMONIOS</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">TESTIMONIOS</p>
            <div class="swiper mySwiper --testimonio_1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“GRACIAS A LA ESCUELA ESTOY <b>TRABAJANDO ACTUALMENTE COMO ASESORA”</b></p>
                            <p class="--content_testimonios_author">Cristina Riaza</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/cristina-riaza.webp" alt="" class="lazyload">
                        </div>
                    </div>
                    <div class="swiper-slide d-md-none">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“SIEMPRE ME HABÍA LLAMADO LA ATENCIÓN LA ASESORÍA, PERO EN LA CARRERA DEJAN PASAR MUCHOS ASPECTOS. <b>EDASE SÍ TE PREPARA PARA TRABAJAR”</b></p>
                            <p class="--content_testimonios_author">Juan Mayan</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/master/juan-mayan.webp" alt="" class="lazyload">
                        </div>
                    </div>
                    <div class="swiper-slide d-md-none">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“TRABAJO A TIEMPO COMPLETO EN UNA ASESORÍA Y PUEDO DECIR QUE <b>SOY ASESORA EXPERTA”</b></p>
                            <p class="--content_testimonios_author">Ana Moreno</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/lanzamiento/ana-moreno.webp" alt="" class="lazyload">
                        </div>
                    </div>
                    <div class="swiper-slide d-md-none">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“PASÉ AÑOS HACIENDO TAREAS QUE NO TENÍAN QUE VER CON LO QUE HABÍA ESTUDIADO Y <b>AHORA TRABAJO EN LO QUE ME GUSTA”</b></p>
                            <p class="--content_testimonios_author">Ana María Durán</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/lanzamiento/ana-maria-duran.webp" alt="" class="lazyload">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next --testimonio_1_button_next"></div>
            </div>
            <div class="swiper mySwiper --testimonio_2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/master/juan-mayan.webp" alt="" class="lazyload">
                        </div>
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“SIEMPRE ME HABÍA LLAMADO LA ATENCIÓN LA ASESORÍA, PERO EN LA CARRERA DEJAN PASAR MUCHOS ASPECTOS. <b>EDASE SÍ TE PREPARA PARA TRABAJAR”</b></p>
                            <p class="--content_testimonios_author">Juan Mayan</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev --testimonio_2_button_prev"></div>
            </div>
            <div class="swiper mySwiper --testimonio_1 d-none d-md-block">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“TRABAJO A TIEMPO COMPLETO EN UNA ASESORÍA Y PUEDO DECIR QUE <b>SOY ASESORA EXPERTA”</b></p>
                            <p class="--content_testimonios_author">Ana Moreno</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/lanzamiento/ana-moreno.webp" alt="" class="lazyload">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next --testimonio_1_button_next"></div>
            </div>
            <div class="swiper mySwiper --testimonio_2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/lanzamiento/ana-maria-duran.webp" alt="" class="lazyload">
                        </div>
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“PASÉ AÑOS HACIENDO TAREAS QUE NO TENÍAN QUE VER CON LO QUE HABÍA ESTUDIADO Y <b>AHORA TRABAJO EN LO QUE ME GUSTA”</b></p>
                            <p class="--content_testimonios_author">Ana María Durán</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev --testimonio_2_button_prev"></div>
            </div>
        </div>
    </div>

    <div class="--aside" id="b_unete">
        <div class="--copy">
            <p class="--section_title">únete</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">únete</p>
            <p class="--title">ÚNETE A NUESTRA<br> CANTERA DE ASESORES</p>
            <div class="--2_columns --b_1">
                <div class="--b_unete-copy">
                    <p class="--b_unete-copy-title">OPORTUNIDADES <br>EN AYUDA T PYMES</p>
                    <p class="--b_unete-copy-text">Contratamos a profesionales formados en nuestra escuela para atender las necesidades de <b>nuestros más de 15.000 clientes.</b></p>
                </div>
                <div class="--b_unete-copy">
                    <p class="--b_unete-copy-title">RED NACIONAL <br>DE ASESORÍAS</p>
                    <p class="--b_unete-copy-text"><b>Pertenecemos a la mayor firma de asesorías y despachos en España,</b> quienes nos reclaman perfiles cualificados para cubrir sus puestos de trabajo.</p>
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
               <div class="--formulario_claim">
                    <h2 class="--title">Inscríbete<br class="d-md-none d-xl-block">
                        a la <br>
                        <span>SEMANA DE <br class="d-md-none d-xl-block">
                        PRESELECCIÓN</span></h2>
               </div>
               <div class="--formulario_form">
                    <p class="--form_title">SOLICITUDES HASTA <br>EL 29 DE AGOSTO</p>
                    @include('layouts.form-footer', ['cta_copy' => 'RESERVA TU PLAZA AHORA'])
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_despues">
        <div class="--copy">
            <p class="--section_title">¿y depués?</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">¿y depués?</p>
            <p class="--title">¿QUÉ PASARÁ AL<br> RESERVAR TU PLAZA?</p>
            <div class="--2_columns --b_1">
                <div class="--despues-copy">
                    <p class="--despues-copy-title">TE LLAMA TU<br> DINAMIZADOR</p>
                    <p class="--despues-copy-text"><b>Un dinamizador te llamará para conocerte mejor.</b> Te explicará todo el proceso y atenderá tus dudas sobre la Semana de Puertas Abiertas.</p>
                </div>
                <div class="--despues-copy">
                    <p class="--despues-copy-title">APRENDES CONCEPTOS<br> IMPRESCINDIBLES</p>
                    <p class="--despues-copy-text">Durante la semana, aprenderás aspectos imprescindibles para desempeñar tu función de asesor. <b>Visualiza los vídeos de todas las clases y solicita al final tu certificado de participación.</b></p>
                </div>
            </div>
            <div class="--2_columns --b_1">
                <div class="--despues-copy">
                    <p class="--despues-copy-title">ASIGNACIÓN<br> DE BECAS</p>
                    <p class="--despues-copy-text"><b>Realiza las pruebas propuestas para optar a una las 100 plazas becadas.</b> Podrás conseguir una beca del 100% antes de que finalice la semana, y sino tus resultados nos servirán para la asignación final.</p>
                    <div class="--cta --go_form_down d-none d-lg-block">RESERVA TU PLAZA AHORA</div>
                </div>
                <div class="--despues-copy">
                    <img src="{{ URL::to('/') }}/images/lanzamiento/puertas_abiertas-2.webp" alt="" class="lazyload">
                </div>
            </div>
            <div class="--cta --go_form_down d-lg-none">RESERVA TU PLAZA AHORA</div>
        </div>
    </div>
</div>
@endsection