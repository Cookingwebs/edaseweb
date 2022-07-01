@extends('layouts.plantilla')

@section('title', 'Emprende')

@section('id-page', 'emprende')

@section('content')
<div id="emprende-page">
    <div id="b_cabecera">
        <div class="--copy">
            <p class="--title">PLAN DE CARRERA </p>
        </div>
    </div>
    <div class="--aside" id="b_objetivos">
        <div class="--copy">
            <p class="--section_title">EMPRENDE</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <p class="--title"><u class="slide-left-delay-0 --first-content"><b>EMPRENDIMIENTO</b></u></p>
           <p class="--extra">PON EL FOCO EN TU OBJETIVO</p>
           <div class="--2_columns slide-left-delay-3 --first-content_3">
               <div class="--objetivos_bloque_copy">
                <h1 class="--objetivos_bloque_copy_title">Crear una asesoría</h1>
                <p class="--objetivos_boque_copy_text">Te guiamos para empezar de cero.</p>
                <p class="--objetivos_bloque_copy_title">Construir su trayectoria <br>de futuro</p>
                <p class="--objetivos_boque_copy_text">Te ayudamos a tener una asesoría rentable.</p>
               </div>
               <div class="--objetivos_bloque_img">
                    <img src="{{ URL::to('/') }}/images/emprende/crear-asesoria-2.webp" alt=""  class="lazyload">
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_salidas">
        <div class="--copy">
            <p class="--section_title">FASES</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">FASES</p>
            <h2 class="--title js-scroll slide-left">5 ETAPAS PARA DIRIGIRSE AL ÉXITO</h2>
            <p class="--text js-scroll slide-right">Encuentra en EDASE las herramientas y el apoyo profesional que necesitas para cada etapa de tu proyecto.</p>
            <div class="--transition_niveles js-scroll slide-right" id="__transition_niveles">
                <div class="--content_transition" data="1">
                    <div class="--b_title_transition">
                        <h3 class="--active" data="1">01. PREPARACIÓN</h3>
                        <h3 data="2">02. CREACIÓN</h3>
                        <h3 data="3">03. DESPEGUE</h3>
                        <h3 data="4">04. CRECIMIENTO</h3>
                        <h3 data="5">05. MADUREZ</h3>
                    </div>
                    <div class="--b_copy_transition">
                        <p class="--active" data="1">Plan de negocio.</p>
                        <p data="2">Puesta en marcha.</p>
                        <p data="3">Desarrollo empresarial.</p>
                        <p data="4">Expansión en el mercado.</p>
                        <p data="5">Consolidación en el sector.</p>
    
                    </div>
                </div>
                <div class="--b_foto_transition">
                    <img src="{{ URL::to('/') }}/images/emprende/crear-asesoria-3.webp" alt="" data="1" class="--active lazyload">
                    <img src="{{ URL::to('/') }}/images/emprende/crear-asesoria-4.webp" alt="" data="2" class="lazyload">
                    <img src="{{ URL::to('/') }}/images/emprende/crear-asesoria-5.webp" alt="" data="3" class="lazyload">
                    <img src="{{ URL::to('/') }}/images/emprende/crear-asesoria-6.webp" alt="" data="4" class="lazyload">
                    <img src="{{ URL::to('/') }}/images/emprende/crear-asesoria-7.webp" alt="" data="5" class="lazyload">
                </div>
                <div class="--mascara_transition">
                </div>
                <div class="--progress_transition" data="1"></div>
            </div>
           
        </div>
    </div>

    <div class="--aside" id="b_admision">
        <div class="--copy">
            <p class="--section_title">PRIMEROS PASOS</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">PRIMEROS PASOS</p>
            <h2 class="--title js-scroll slide-left">CREA TU ASESORÍA DESDE <br class="d-none d-md-block">
                UNA POSICIÓN PRIVILEGIADA</h2>
            <p class="--subtitle js-scroll slide-left">Tendrás todos nuestros recursos a tu alcance.</p>
            <h3 class="--salidas_title js-scroll slide-left">ESPECIALIZACIÓN</h3>
            <p class="--salidas_copy js-scroll slide-left">A partir de una visión global y actualizada de los servicios.</p>
            <h3 class="--salidas_title js-scroll slide-left">ESTRATEGIA EMPRESARIAL</h3>
            <p class="--salidas_copy js-scroll slide-left">Con los directivos de la asesoría líder en España.</p>
            <h3 class="--salidas_title js-scroll slide-left">TECNOLOGÍA</h3>
            <p class="--salidas_copy js-scroll slide-left">Desarrollada para optimizar el trabajo tu negocio.</p>
            <h3 class="--salidas_title js-scroll slide-left">OUTSOURCING</h3>
            <p class="--salidas_copy js-scroll slide-left">Con nuestro equipo de producción de asesores expertos.</p>
        </div>
    </div>

    <div class="--aside" id="b_escuela">
        <div class="--copy">
            
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <h2 class="--title">INTEGRA TU ASESORÍA <br>EN AYUDA T PYMES</h2>
            <p class="--extra js-scroll fade-in">Las asesorías integradas tienen grandes beneficios: financiación, soporte, herramientas, formación, marketing, nuevos clientes…</p>
            <p class="--extra js-scroll fade-in">Todo sin interferir en tus decisiones como gerente.</p>
            <div class="--2_columns">
                <div class="--escuela_copy d-md-none">
                    <img src="{{ URL::to('/') }}/images/emprende/crear-asesoria.webp" alt=""  class="lazyload">
                </div>
                <div class="--escuela_copy">
                    <h3 class="--subtitle js-scroll fade-in">PLAN DE ACELERACIÓN <br>DE ASESORÍAS</h3>
                    <p class="js-scroll fade-in">Hemos diseñado un plan para trabajar por la evolución de tus resultados con el objetivo de que alcances los requisitos necesarios para tu integración. </p>
                </div>
                <div class="--escuela_copy d-none d-md-block">
                    <img src="{{ URL::to('/') }}/images/emprende/crear-asesoria.webp" alt=""  class="lazyload">
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer-emprende')

    

</div>
@endsection