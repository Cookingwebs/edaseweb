@extends('layouts.plantilla')

@section('title', 'Master')

@section('id-page', 'master')

@section('content')
<div id="master-page">
    <div id="b_cabecera">
        <div class="--copy">
            <p class="--title">MÁSTER ASESOR EXPERTO</p>
        </div>
    </div>
    <div class="--aside" id="b_formulario">
        <div class="--copy">
            <p class="--section_title">TITULACIONES</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <div class="--2_columns">
               <div class="--formulario_claim">
                    <h2 class="--title"><u class="slide-left-delay-0 --first-content">Fiscal,</u><br>
                        <u class="slide-left-delay-1 --first-content">Laboral</u> <br>
                            <u class="slide-left-delay-2 --first-content">y Contable</u></h2>
                    <ul class="slide-left-delay-4 --first-content_2">
                        <li><b>Formación técnica</b> 9 meses </li>
                        <li><b>Prácticas en empresas</b> 3 meses </li>
                        <li><b>Experiencia total certificada</b> 1 año </li>
                        <li><b>Modalidad</b> Online, presencial o streaming</li>
                    </ul>
               </div>
               <div class="--formulario_form fade-in-delay-4 --first-content_2">
                    <p class="--form_title">Muy pronto próxima convocatoria</p>
                    <p class="--form_extra">¡PLAZAS LIMITADAS!</p>
                    @include('layouts.form-cabecera')
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_master">
        <div class="--copy">
            
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <div class="--2_columns">
               <div class="--master_img d-none d-md-block">
                <img src="{{ URL::to('/') }}/images/master/master-asesoria.webp" alt="" class="lazyload js-scroll slide-left">
               </div>
               <div class="--master_copy_1">
                    <h1 class="--title --text_1 js-scroll slide-right">Máster<br class="d-none d-md-block"> Asesoría</h1>
                    <img src="{{ URL::to('/') }}/images/master/master-asesoria.webp" alt="" class="d-md-none lazyload --text_1 js-scroll slide-right">
                    <p class="--subtitle --text_1 js-scroll slide-right">IMPARTIDO POR LOS PROFESIONALES DE LA ASESORÍA Nº1 EN ESPAÑA</p>
                    <p class="--text_1 --text_1 js-scroll slide-right">Fórmate en el asesoramiento para empresas y autónomos con los líderes del sector desde un enfoque multidisciplinar y tecnológico. </p>
               </div>
           </div>
           <p class="--title_2 js-scroll slide-left">Qué distingue al máster de asesoría fiscal, laboral y contable de EDASE</p>
           <div class="--2_columns --2_rows">
               <div class="--master_copy_2 js-scroll slide-left">
                   <h3 class="--title_3">- VISIÓN 360º</h3>
                   <p>Te especializamos en las tres áreas de trabajo.</p>
                </div>
               <div class="--master_copy_2 js-scroll slide-right">
                   <h3 class="--title_3">- CONTROL PRÁCTICO</h3>
                   <p>Te damos la oportunidad de poner en práctica tus conocimientos.</p>
                </div>
               <div class="--master_copy_2 js-scroll slide-left">
                   <h3 class="--title_3">- PROFESORADO</h3>
                   <p>Tus docentes son <br class="d-md-none">especialistas en activo.</p>
                </div>
               <div class="--master_img">
                   <img src="{{ URL::to('/') }}/images/master/master-asesoria_2.webp" alt="" class="lazyload js-scroll slide-right">
                </div>
        </div>
        </div>
    </div>

    <div class="--aside" id="b_objetivos">
        <div class="--copy">
            <p class="--section_title">Objetivos</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">Objetivos</p>
           <h2 class="--title js-scroll slide-left">Objetivos</h2>
           <p class="--subtitle js-scroll slide-left">Te preparamos para<br> tu futuro profesional</p>
           <div class="--2_columns --2_rows">
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title js-scroll slide-left">TRABAJAR <br><span>COMO ASESOR</span></h3>
                   <p class="js-scroll slide-left">Si has cursado estudios relacionados.</p>
               </div>
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title js-scroll slide-right">AVANZAR <br><span>EN TU CARRERA</span></h3>
                   <p class="js-scroll slide-right">Si has trabajado o está trabajando en el sector.</p>
               </div>
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title js-scroll slide-left">EMPRENDER <br><span>UNA ASESORÍA</span></h3>
                   <p class="js-scroll slide-left">Si te gustaría autoemplearte.</p>
               </div>
               <div class="--objetivos_copy">
                   <h3 class="--objetivos_title js-scroll slide-right">MEJORAR <br><span>TU NEGOCIO</span></h3>
                   <p class="js-scroll slide-right">Si quieres mejorar tus servicios.</p>
               </div>
           </div>
           <div class="--cta --go_form js-scroll slide-left">SOLICITA TU PLAZA</div>
        </div>
    </div>
    <div class="--aside" id="b_descubre">
        <div class="--copy">
            <p class="--section_title">DESCUBRE</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">DESCUBRE</p>
           <h2 class="--title js-scroll slide-left">¿Cómo es nuestro máster en asesoría de empresas?</h2>
           <p class="--subtitle js-scroll slide-left">DESCUBRE TODO <br class="d-md-none">LO QUE INCLUYE</p>
           <div class="--2_columns">
               <div class="--descubre_copy js-scroll slide-left">
                   <h3 class="--descubre_title">Bolsa de empleo</h3>
                   <p>Ofertas exclusivas en todo el país.</p>
                   <h3 class="--descubre_title">Campus virtual</h3>
                   <p>Contenido en vídeo disponible 24/7.</p>
                   <h3 class="--descubre_title">Clases en directo</h3>
                   <p>Sesiones con profesores y alumnos.</p>
                   <h3 class="--descubre_title">Tutorías personales</h3>
                   <p>Atención individual y directa.</p>
               </div>
               <div class="--descubre_copy js-scroll slide-right">
                   <h3 class="--descubre_title">Acceso a herramientas</h3>
                   <p>Ejercicios utilizando la última tecnología.</p>
                   <h3 class="--descubre_title">Formación continua</h3>
                   <p>Plataforma de actualidad para asesores.</p>
                   <h3 class="--descubre_title">Diploma acreditativo</h3>
                   <p>12 meses de experiencia avalada por Ayuda T Pymes.</p>
               </div>
           </div>
           <div class="--cifras_tabla">
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos js-scroll slide-left">
                    <p><span>+</span>500</p>
                </div>
                <div class="--cifras_tabla_item_copy js-scroll slide-right">
                    <p>Nuevos alumnos del máster asesor experto en el último año</p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos js-scroll slide-left">
                    <p>95,2<span>%</span></p>
                </div>
                <div class="--cifras_tabla_item_copy js-scroll slide-right">
                    <p>Tasa de ocupación de los asesores formados</p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos js-scroll slide-left">
                    <p>70<span>%</span></p>
                </div>
                <div class="--cifras_tabla_item_copy js-scroll slide-right">
                    <p>Compatibilizan el trabajo con la formación</p>
                </div>
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
            <h2 class="--title js-scroll slide-left">QUÉ OPINAN<br class="d-none d-md-block">
                NUESTROS ALUMNOS</h2>
            <!-- Slider main container -->
            <div class="swiper mySwiper --testimonio_1 js-scroll slide-left">
                <div class="swiper-wrapper">
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
                        <p class="--content_testimonios_quote"><b>“Lo que más me ha gustado es la cercanía con las profesoras.</b> Estás en contacto con ellas y en cualquier momento pueden resolverte cualquier duda”</p>
                        <p class="--content_testimonios_author">Sergio Pérez</p>
                    </div>
                    <div class="--content_testimonios_foto">
                        <img src="{{ URL::to('/') }}/images/master/sergio-perez.webp" alt="" class="lazyload">
                    </div>
                    <div></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="--content_testimonios_copy">
                        <p class="--content_testimonios_quote">“Las profesoras lo hacen ameno y te lo explican todo muy bien, <b>mil veces si hace falta”</b></p>
                            <p class="--content_testimonios_author">Manuel Rodríguez</p>
                    </div>
                    <div class="--content_testimonios_foto">
                        <img src="{{ URL::to('/') }}/images/master/manuel-rodriguez.webp" alt="" class="lazyload">
                    </div>
                    <div></div>
                  </div>
                </div>
                <div class="swiper-button-next --testimonio_1_button_next"></div>
                {{-- <div class="swiper-button-prev"></div> --}}
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
           <h2 class="--title js-scroll slide-left">Plan de estudios</h2>
           <p class="--subtitle js-scroll slide-left">FORMACIÓN TÉCNICA Y PRÁCTICAS<br> ASESORADAS EN LAS <b>TRES ÁREAS</b></p>
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
            <p class="--section_title">Modalidades</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">Modalidades</p>
           <h2 class="--title js-scroll slide-left">Modalidades</h2>
           <p class="--subtitle js-scroll slide-left"><b>3 tipos</b> de convocatorias</p>
           <div class="--transition_niveles js-scroll slide-right" id="__transition_niveles">
            <div class="--content_transition" data="1">
                <div class="--b_title_transition">
                    <h3 class="--active" data="1">Online</h3>
                    <h3 data="2">Presencial</h3>
                    <h3 data="3">Streaming</h3>
                </div>
                <div class="--b_copy_transition">
                    <p class="--active" data="1">Convocatorias ordinarias donde te formamos en 12 meses a través del campus virtual, prácticas y clases en directo con los tutores.</p>
                    <p data="2"><b>PRÓXIMAMENTE.</b> Convocatorias intensivas de 5 meses en nuestra sede central, donde conocemos todo tu potencial en persona. </p>
                    <p data="3"><b>PRÓXIMAMENTE.</b> Convocatorias intensivas de 5 meses, donde puedes seguir las clases en directo desde cualquier lugar de España.</p>

                </div>
            </div>
            <div class="--b_foto_transition">
                <img src="{{ URL::to('/') }}/images/master/online.webp" alt="" data="1" class="--active lazyload">
                <img src="{{ URL::to('/') }}/images/master/presencial.webp" alt="" data="2" class="lazyload">
                <img src="{{ URL::to('/') }}/images/master/streaming.webp" alt="" data="3" class="lazyload">
            </div>
            <div class="--mascara_transition">
            </div>
            <div class="--progress_transition" data="1"></div>
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
                   <p class="--subtitle js-scroll slide-left">ACCESO <span>Y ADMISIÓN</span></p>
                    <h2 class="--title"><u class="js-scroll slide-left">ÚNETE</u><br>
                        <u class="js-scroll slide-left">AL MÁSTER</u> <br>
                        <span><u class="js-scroll slide-left">ASESOR</u> <br>
                        <u class="js-scroll slide-left">EXPERTO</u></span></h2>
                    <p class="--text js-scroll slide-left">Rellena el formulario o llámanos para acceder al máster y ser parte de nuestra cantera de asesores. </p>
               </div>
               <div class="--formulario_form js-scroll slide-right">
                    <p class="--form_title">Muy pronto próxima convocatoria</p>
                    <p class="--form_extra">¡PLAZAS LIMITADAS!</p>
                    @include('layouts.form-footer')
               </div>
           </div>
        </div>
    </div>

</div>
@endsection