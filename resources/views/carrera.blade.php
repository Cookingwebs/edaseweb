@extends('layouts.plantilla')

@section('title', 'Plan de carrera')

@section('id-page', 'carrera')

@section('content')
<div id="carrera-page">
    <div id="b_cabecera">
        <div class="--copy">
            <h1 class="--title">PLAN DE CARRERA</h1>
        </div>
    </div>
    <div class="--aside" id="b_objetivos">
        <div class="--copy">
            <p class="--section_title">objetivos</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <p class="--title"><u class="slide-left-delay-0 --first-content">Un paso más cerca</u><br> <u class="slide-left-delay-1 --first-content">de <b>TU FUTURO</b></u></p>
           <p class="--extra slide-left-delay-2 --first-content_2">Traza tu plan de carrera con EDASE</p>
           <h2 class="--subtitle slide-left-delay-2 --first-content_2">CUÉNTANOS A DÓNDE QUIERES LLEGAR</h2>
           <div class="--2_columns slide-left-delay-3 --first-content_3">
               <div class="--objetivos_bloque_copy">
                <h3 class="--objetivos_bloque_copy_title">VIVE TU PROPIA HISTORIA<br class="d-none d-xl-block"> Y LA DE<br class="d-none d-lg-block d-xl-none"> NADIE MÁS</h3>
                <p class="--objetivos_boque_copy_text"><b>EDASE</b> basa su metodología en el seguimiento personalizado del alumnado. Nos ponemos en tus zapatos para garantizarte el éxito en tu experiencia.</p>
               </div>
               <div class="--objetivos_bloque_img">
                    <img src="{{ URL::to('/') }}/images/carrera/plan-de-carrera.webp" alt=""  class="lazyload">
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_salidas">
        <div class="--copy">
            <p class="--section_title">SALIDAS</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">SALIDAS</p>
           <div class="--2_columns">
               <div class="--salidas_bloque_title">
                <h2 class="--title js-scroll slide-left">Salidas profesionales en el sector de la asesoría</h2>
               </div>
               <div class="--salidas_bloque_copy_1">
                   <p class="--text_1 js-scroll slide-right">Somos la principal institución del sector de la gestión y la asesoría en España. Nuestra misión es guiarte entre las distintas alternativas hacia una salida profesional real.</p>
               </div>
           </div>
           <div class="--2_columns">
               <div class="--salidas_bloque_copy js-scroll slide-left">
                    <h4 class="--salidas_bloque_copy_title">ORIENTACIÓN LABORAL<br> CONTINUA</h4>
                    <p class="--salidas_boque_copy_text">Solicita una <b>entrevista con nuestras dinamizadoras formativas.</b> Estudiarán tu perfil y empezaremos a trazar tu propio plan de carrera. Llega a donde te propongas.</p>
               </div>
               <div class="--salidas_bloque_copy js-scroll slide-right">
                    <h4 class="--salidas_bloque_copy_title">EMPLEABILIDAD Y<br> BOLSA DE TRABAJO</h4>
                    <p class="--salidas_boque_copy_text">Los alumnos matriculados en la Escuela de Asesores acceden inmediatamente a la <b>bolsa de empleo, con vacantes</b> en empresas, despachos y asesorías de toda España.</p>
               </div>
           </div>
           <div class="--2_columns">
               <div class="--salidas_bloque_copy js-scroll slide-left">
                    <h4 class="--salidas_bloque_copy_title">EMPRENDIMIENTO</h4>
                    <p class="--salidas_boque_copy_text">Si tu objetivo es crear tu propia asesoría, te proporcionaremos las herramientas y el apoyo profesional que necesites en cada etapa de tu proyecto.</p>
               </div>
               <div class="--salidas_bloque_copy js-scroll slide-right">
                    <h4 class="--salidas_bloque_copy_title">RECICLAJE PROFESIONAL<br> Y ALTA DIRECCIÓN</h4>
                    <p class="--salidas_boque_copy_text">Lanza tu carrera directiva y especialízate ampliando tu área funcional dentro del sector de la asesoría y el despacho profesional.</p>
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_admision">
        <div class="--copy">
            <p class="--section_title">ADMISIÓN</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">ADMISIÓN</p>
            <h3 class="--title js-scroll slide-left">Da el primer paso</h3>
            <p class="--salidas_copy js-scroll slide-left"><b>- Solicita una entrevista</b> con una dinamizadora formativa en EDASE.</p>
            <p class="--salidas_copy js-scroll slide-left"><b>- Analizamos tu perfil</b> para ayudarte a desarrollar tu potencial.</p>
            <p class="--salidas_copy js-scroll slide-left"><b>-</b> Proyéctate en el tiempo: <b>establece objetivos profesionales a corto, medio y largo plazo.</b></p>
            <p class="--salidas_copy js-scroll slide-left"><b>- Plan de carrera:</b> trazamos tu hoja de ruta a seguir para la consecución de tus metas profesionales con la ayuda de la Escuela y el equipo docente.</p>
        </div>
    </div>

    @include('layouts.footer-generico')

    

</div>
@endsection