  
@extends('layouts.plantilla-promo', ['chat' => $chat])

@section('title', 'mba')

@section('id-page', 'mba')

@section('content')
<div id="mba-page" class="promo_programa">
    <div id="b_cabecera">
        <div class="--copy">
            <p class="--title">Programa Empresarial Asesorías</p>
        </div>
    </div>
    <div class="--aside" id="b_video">
        <div class="--copy">
            <p class="--section_title">SOCIAL MEDIA PLAN</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <h2 class="--title">ASÍ CAPTAMOS CLIENTES <br><b>CON REDES SOCIALES</b></h2>
            <ul class="slide-left-delay-4 --first-content_2">
                <li><b>MARKETING PARA ASESORÍAS Y DESPACHOS</b></li>
            </ul>
            <div class="ratio ratio-16x9">
                <iframe src="https://player.vimeo.com/video/716355542?h=96af8c6012&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="fullscreen; picture-in-picture" allowfullscreen title="GO_Directo_Contabilida.mp4"></iframe><script src="https://player.vimeo.com/api/player.js"></script>
              </div>
           </div>
    </div>

    <div class="--aside" id="b_master">
        <div class="--copy">
            <p class="--section_title">PROGRAMA EMPRESARIAL</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">PROGRAMA EMPRESARIAL</p>
           <div class="--2_columns">
               <div class="--master_img d-none d-md-block">
                <img src="{{ URL::to('/') }}/images/mba/promo-mba.webp" alt="" class="lazyload js-scroll slide-left">
               </div>
               <div class="--master_copy_1">
                    <h1 class="--title js-scroll slide-right">¿Qué es el Programa<br> Empresarial EDASE?</h1>
                    <img src="{{ URL::to('/') }}/images/mba/promo-mba.webp" alt="" class="d-md-none lazyload js-scroll slide-right">
                    <p class="--subtitle js-scroll slide-right">ORIENTADO A PROFESIONALES DE LA ASESORÍA Y EL DESPACHO PROFESIONAL</p>
                    <p class="js-scroll slide-right">Control sobre las principales áreas de la gestión estratégica, con el apoyo de los directivos de la mayor firma de asesorías de empresas en España.</p>
               </div>
           </div>   
        </div>
    </div>

    <div class="--aside" id="b_objetivos">
        <div class="--copy">
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <h2 class="--title js-scroll slide-left">Todo el apoyo que necesitas en<br> un sector en pleno crecimiento:</h2>
           <div class="--2_columns --2_rows">
               <div class="--objetivos_copy js-scroll slide-left">
                   <h3 class="--objetivos_title">A TU LADO <br class="d-none d-md-block">PASO A PASO</h3>
                   <p>Seguimiento del equipo directivo de Ayuda T Pymes.</p>
                </div>
                <div class="--objetivos_copy js-scroll slide-right">
                   <h3 class="--objetivos_title">DIRECCIÓN <br class="d-none d-md-block">ESTRATÉGICA</h3>
                   <p>Administración, operaciones, marketing y ventas, RRHH, tecnología, automatización de procesos…</p>
                </div>
                <div class="--objetivos_copy js-scroll slide-left">
                   <h3 class="--objetivos_title">TRABAJAMOS <br class="d-none d-md-block">POR TI…</h3>
                   <p>Outsourcing y externalización.</p>
                </div>
                <div class="--objetivos_copy js-scroll slide-right">
                    <h3 class="--objetivos_title">O TE ENSEÑAMOS <br class="d-none d-md-block">A TRABAJAR</h3>
                   <p>Si lo necesitas, formación en asesoría y gestión fiscal, laboral y contable.</p>
               </div>
           </div>
           <div class="--cta_sub js-scroll slide-left">DESCARGAR</div>
           <div class="--cta js-scroll slide-left">
                <a href="/dossier/creacion-y-direccion-edase.pdf" target="_blank">PROGRAMA</a>
            </div>
        </div>
    </div>
    <div class="--aside" id="b_tecnologia">
        <div class="--copy">
            <p class="--section_title">ESCUELA DE ASESORES</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">ESCUELA DE ASESORES</p>
           <h2 class="--title js-scroll slide-left">¿Qué es la Escuela<br> de Asesores?</h2>
           <div class="--2_columns">
               <div class="--tecnologia_copy">
                   <h3 class="--tecnologia_title js-scroll slide-left"><span>- 01.</span> Es el centro de emprendimiento y formación en alta dirección de la mayor firma de asesorías y servicios a empresas en España.</h3>
                   <h3 class="--tecnologia_title js-scroll slide-left"><span>- 02.</span> Especializado en las áreas de gestión, dirección, administración de empresas y asesorías.</h3>
               </div>
               <div class="--tecnologia_img">
                <img src="{{ URL::to('/') }}/images/mba/promo-mba-2.webp" alt="" class="lazyload js-scroll slide-right">
               </div>
           </div>
           <div class="--cifras_tabla">
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos js-scroll slide-left">
                    <p><span>+</span>1000</p>
                </div>
                <div class="--cifras_tabla_item_copy js-scroll slide-right">
                    <p><b>Profesionales del sector en 2022</b> <br class="d-none d-md-block">mejoraron sus carreras con EDASE</p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos js-scroll slide-left">
                    <p><span>+</span>500</p>
                </div>
                <div class="--cifras_tabla_item_copy js-scroll slide-right">
                    <p><b>Asesorías usuarias de <br class="d-none d-md-block">nuestra tecnología</b></p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos js-scroll slide-left">
                    <p><span>+</span>100</p>
                </div>
                <div class="--cifras_tabla_item_copy js-scroll slide-right">
                    <p><b>Nuevos despachos</b> creados <br class="d-none d-md-block">con la ayuda de EDASE</p>
                </div>
            </div>
            <div class="--cifras_tabla_item">
                <div class="--cifras_tabla_item_datos js-scroll slide-left">
                    <p><span>+</span>350</p>
                </div>
                <div class="--cifras_tabla_item_copy js-scroll slide-right">
                    <p><b>Expertos a tu disposición</b> para <br class="d-none d-md-block">ampliar y externalizar tus servicios.</p>
                </div>
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
                   <p class="--subtitle js-scroll slide-left">ACCESO <span>Y ADMISIÓN</span></p>
                    <h2 class="--title"><u class="js-scroll slide-left">ÚNETE</u><br>
                        <u class="js-scroll slide-left">AL PROGRAMA</u> <br>
                        <span><u class="js-scroll slide-left">EMPRESARIAL</u> <br>
                        <u class="js-scroll slide-left">EDASE</u></span></h2>
                    <p class="--text js-scroll slide-left"><b>Admisiones sujetas a vacantes disponibles.</b> Limitamos el acceso al programa para garantizar el seguimiento de calidad.</p>
               </div>
               <div class="--formulario_form js-scroll slide-right">
                    <p class="--form_title">Rellena el formulario para <br>
                        continuar con el programa:</p>
                    @include('layouts.form-footer')
               </div>
           </div>
        </div>
    </div>

</div>
@endsection