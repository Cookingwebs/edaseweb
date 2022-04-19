@extends('layouts.plantilla')

@section('title', 'MBA')

@section('id-page', 'mba')

@section('content')
<div id="mba-page">
    <div id="b_cabecera">
        <div class="--copy">
            <p class="--title">MBA ONLINE</p>
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
                    <h2 class="--title"><u class="slide-left-delay-0 --first-content">Especialización</u> <br>
                        <u class="slide-left-delay-1 --first-content">en <b>DIRECCIÓN</u> <br>
                        <u class="slide-left-delay-2 --first-content">ASESORÍAS Y</u> <br>
                        <u class="slide-left-delay-3 --first-content">DESPACHOS</u></b></h2>
                    <ul class="slide-left-delay-4 --first-content_2">
                        <li><b>Formación técnica</b> 9 meses </li>
                        <li><b>Prácticas en empresas</b> 3 meses </li>
                        <li><b>Formación empresarial</b> 6 meses </li>
                        <li><b>Modalidad</b> Online</li>
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
                <img src="{{ URL::to('/') }}/images/mba/mba.webp" alt="" class="lazyload js-scroll slide-left">
               </div>
               <div class="--master_copy_1">
                    <h1 class="--title js-scroll slide-right">Programa MBA<br> en asesoría</h1>
                    <img src="{{ URL::to('/') }}/images/mba/mba.webp" alt="" class="d-md-none lazyload js-scroll slide-right">
                    <p class="--subtitle js-scroll slide-right">ESTRATEGIA EMPRESARIAL CON LOS DIRECTIVOS DE AYUDA T PYMES</p>
                    <p class="js-scroll slide-right">Aprovecha tus conocimientos y experiencia para conseguir un puesto directivo o desarrollar un negocio en el <b>mundo de la asesoría.</b></p>
               </div>
           </div>
           <p class="--title_2 js-scroll slide-left">¿Por qué es el momento perfecto para formarse en la dirección de asesorías y despachos?</p>
           <div class="--2_columns">
               <div class="--master_copy_2">
                   <h3 class="--title_3 js-scroll slide-left"><span>- 01.</span> El 95% de los emprendedores utiliza servicios de asesoramiento</h3>
                   <h3 class="--title_3 js-scroll slide-left"><span>- 02.</span> Crecen las oportunidades en el sector de la asesoría</h3>
                   <h3 class="--title_3 js-scroll slide-left"><span>- 03.</span> El mercado demanda perfiles directivos</h3>
                </div>
               <div class="--master_img">
                   <img src="{{ URL::to('/') }}/images/mba/mba_2.webp" alt="" class="lazyload js-scroll slide-right">
                </div>
        </div>
        </div>
    </div>

    <div class="--aside" id="b_objetivos">
        <div class="--copy">
            <p class="--section_title">recursos</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">recursos</p>
           <h2 class="--title js-scroll slide-left">Empieza tu plan de acción<br> en el MBA Online</h2>
           <p class="--subtitle js-scroll slide-left">Te dotamos de todos los recursos necesarios para proyectar tu futuro como directivo o impulsar la creación de tu asesoría</p>
           <div class="--2_columns --2_rows">
               <div class="--objetivos_copy js-scroll slide-left">
                   <h3 class="--objetivos_title">ESTRATEGIA <br class="d-none d-md-block">FORMATIVA</h3>
                   <p>Fortalece tus competencias.</p>
               </div>
               <div class="--objetivos_copy js-scroll slide-right">
                   <h3 class="--objetivos_title">FORMACIÓN <br class="d-none d-md-block">CONTINUA</h3>
                   <p>No te pierdas ninguna novedad.</p>
               </div>
               <div class="--objetivos_copy js-scroll slide-left">
                   <h3 class="--objetivos_title">BOLSA DE EMPLEO</h3>
                   <p>Contacta con empresas<br class="d-md-none"> de toda España.</p>
               </div>
               <div class="--objetivos_copy js-scroll slide-right">
                   <h3 class="--objetivos_title">TECNOLOGÍA Y <br class="d-none d-md-block">OUTSOURCING</h3>
                   <p>Proporciona a tus clientes el mejor servicio.</p>
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
           <h2 class="--title js-scroll slide-left">¿Qué incluye la estrategia formativa del MBA?</h2>
           <p class="--subtitle js-scroll slide-left">GESTIÓN Y DIRECCIÓN EMPRESARIAL</p>
               <div class="--descubre_copy">
                   <h3 class="--descubre_title js-scroll slide-left">9 MESES de especialización <br>Fiscal, laboral y contable</h3>
                   <p class="js-scroll slide-left">Profesionales en activo te formarán con una visión global y actualizada del sector.</p>
                   <h3 class="--descubre_title js-scroll slide-left">3 MESES de prácticas <br>Online o presencial</h3>
                   <p class="js-scroll slide-left">Podrás realizar prácticas voluntarias en Ayuda T Pymes.</p>
                   <h3 class="--descubre_title js-scroll slide-left">6 MESES de aprendizaje empresarial. <br>Con los directivos de la asesoría líder en España</h3>
                   <p class="js-scroll slide-left">Ampliarás tus conocimientos sobre las áreas más importantes de tu negocio.</p>
               </div>
        </div>
    </div>
    <div class="--aside" id="b_tecnologia">
        <div class="--copy">
            <p class="--section_title">TECNOLOGÍA Y OUTSOURCING</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">TECNOLOGÍA Y OUTSOURCING</p>
           <h2 class="--title js-scroll slide-left">Te ayudamos a crear una asesoría rentable</h2>
           <p class="--subtitle js-scroll slide-left">Apuesta desde el primer momento<br class="d-none d-md-block"> por la atención al cliente.</p>
           <div class="--2_columns">
               <div class="--tecnologia_copy">
                   <h3 class="--tecnologia_title js-scroll slide-left">La tecnología de nuestros despachos te permitirá ofrecer un servicio eficiente</h3>
                   <h3 class="--tecnologia_title js-scroll slide-left">Los asesores de Ayuda T Pymes serán tu equipo de producción</h3>
               </div>
               <div class="--tecnologia_img">
                <img src="{{ URL::to('/') }}/images/mba/mba_3.webp" alt="" class="lazyload js-scroll slide-right">
               </div>
           </div>
           <div class="--cifras_tabla">
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos js-scroll slide-left">
                    <p><span>+</span>500</p>
                </div>
                <div class="--cifras_tabla_item_copy js-scroll slide-right">
                    <p>Asesorías usuarias de nuestra tecnología</p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos js-scroll slide-left">
                    <p><span>+</span>100</p>
                </div>
                <div class="--cifras_tabla_item_copy js-scroll slide-right">
                    <p>Asesorías creadas con la ayuda de EDASE</p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos js-scroll slide-left">
                    <p><span>+</span>300</p>
                </div>
                <div class="--cifras_tabla_item_copy js-scroll slide-right">
                    <p>Especialistas para externalizar tus servicios</p>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="--aside" id="b_programa">
        <div class="--copy">
            <p class="--section_title">actualización </p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">actualización</p>
           <h2 class="--title js-scroll slide-left">Con el MBA de EDASE no dejarás de actualizar tu perfil</h2>
           <div class="--3_columns">
               <div class="--programa_copy js-scroll slide-left">
                   <h3 class="--programa_title">FORMACIÓN <br>CONTINUA</h3>
                   <p>Tendrás el acceso a una plataforma de vídeos para profesionales.</p>
               </div>
               <div class="--programa_copy js-scroll slide-right">
                   <h3 class="--programa_title">CONSULTORÍA <br>EMPRESARIAL</h3>
                   <p>Un equipo de expertos te asesorará y resolverá todas tus dudas durante 18 meses.</p>
               </div>
           </div>
           <div class="--cta_sub js-scroll slide-left">DESCARGAR</div>
           <div class="--cta js-scroll slide-left">
                <a href="/dossier/EDASE_MBA.pdf" target="_blank">PROGRAMA</a>
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
                        <u class="js-scroll slide-left">AL <span>MBA</u> <br>
                        <u class="js-scroll slide-left">ONLINE</span></u></h2>
                    <p class="--text js-scroll slide-left">Rellena el formulario o llámanos para acceder al programa de MBA y empezar a transformar tu futuro profesional.</p>
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