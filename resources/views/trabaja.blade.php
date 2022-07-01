@extends('layouts.plantilla')

@section('title', 'Trabaja')

@section('id-page', 'trabaja')

@section('content')
<div id="trabaja-page">
    <div id="b_cabecera">
        <div class="--copy">
            <p class="--title">PLAN DE CARRERA </p>
        </div>
    </div>
    <div class="--aside" id="b_objetivos">
        <div class="--copy">
            <p class="--section_title">TRABAJA</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <p class="--title"><u class="slide-left-delay-0 --first-content">TRABAJAR <b>COMO ASESOR</b></u></p>
           <div class="--2_columns slide-left-delay-3 --first-content_3">
               <div class="--objetivos_bloque_copy">
                <h1 class="--objetivos_bloque_copy_title">CUÉNTANOS A DÓNDE <br>QUIERAS LLEGAR</h1>
                <p class="--objetivos_boque_copy_text">Trazamos tu hoja de ruta personalizada. Te dirigimos hacia tu primera salida profesional real o hacia el puesto directivo que mereces en el mundo de la asesoría.</p>
               </div>
               <div class="--objetivos_bloque_img">
                    <img src="{{ URL::to('/') }}/images/emprende/crear-asesoria-2.webp" alt=""  class="lazyload">
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_curriculum">
        <div class="--copy">
            <p class="--section_title">FORMULARIO</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">FORMULARIO</p>
            <h2 class="--title js-scroll slide-left">ENVÍANOS <b>TU CURRÍCULUM</b></h2>
            <p class="--text js-scroll slide-right">RELLENA EL FORMULARIO PARA QUE ANALICEMOS TU PERFIL Y PODAMOS AYUDARTE A TRABAJAR COMO ASESOR EN NUESTRO SECTOR.</p>
            <form action="/upload-file" method="post" name="upload_form" id="upload_form">
                @csrf
                <div class="--form_bloque">
                    <input type="text" name="name_input" id="name_input" placeholder="Nombre">
                </div>
                <div class="--form_bloque">
                    <input type="text" name="phone_input" id="phone_input" placeholder="Teléfono*" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                    <span class="--error --alert_cabecera_email">El Teléfono no es correcto</span>
                </div>
                <div class="--form_bloque">
                    <input type="email" name="email_input" id="email_input" placeholder="Email">
                    <span class="--error --alert_cabecera_email">El email no es correcto</span>
                </div>
                <div class="--form_bloque --aviso_input">
                    <p><input type="checkbox" name="aviso_input" id="aviso_input"><span>Acepto los <a href="{{route('terminos')}}" target="_blank">Términos y Condiciones</a>, <a href="{{route('aviso')}}" target="_blank">Aviso legal</a> y la <a href="{{route('politica')}}" target="_blank">Política de privacidad</a>.*</span></p>
                    <span class="--error --alert_cabecera_agree">Debes aceptar los términos legales</span>
                </div>
                <div class="--form_bloque --aviso_notificaciones">
                    <p><input type="checkbox" name="notificaciones_input" id="notificaciones_input"><span>Deseo recibir información acerca de los servicios de Ayuda T Soluciones Profesionales.</span></p>
                </div>
                <input type="hidden" name="enterprise_input" value="{{ $enterprise }}">
                <button class="--cta_submit">SOLICITAR INFORMACIÓN</button>
                <span class="--success --alert_cabecera_sucess">Su solicitud se ha enviado correctamente</span>
                <span class="--error --alert_cabecera_error">No se ha podido enviar la solicitud</span>
            </form>
           
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