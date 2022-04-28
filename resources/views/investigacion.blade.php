@extends('layouts.plantilla')

@section('title', 'I+D')

@section('id-page', 'investigacion')

@section('content')
<div id="investigacion-page">
    <div id="b_cabecera">
        <div class="--copy">
            <h1 class="--title">Investigación y Desarrollo<br class="d-md-none"> en la asesoría</h1>
        </div>
    </div>
    <div class="--aside" id="b_objetivos">
        <div class="--copy">
            <p class="--section_title">cambios</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <h2 class="--title"><u class="slide-left-delay-0 --first-content">El cambio</u><br> <u class="slide-left-delay-1 --first-content">implica</u><br> <u class="slide-left-delay-3 --first-content_2"><b>innovación</b></u></h2>
           <div class="--2_columns">
               <div class="--objetivos_bloque_copy slide-left-delay-4 --first-content_3">
                <h3 class="--objetivos_bloque_copy_title">ASESORAR COMO <br>PRINCIPAL VALOR</h3>
                <p class="--objetivos_boque_copy_text">La llegada de sistemas de intercambios de documentación, lectura de datos, aplicaciones y softwares permite al asesor ejercer su verdadero papel, el de asesorar.</p>
               </div>
               <div class="--objetivos_bloque_img slide-right-delay-4 --first-content_3">
                    <img src="{{ URL::to('/') }}/images/investigacion/cambios.webp" alt=""  class="lazyload">
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_salidas">
        <div class="--copy">
            <p class="--section_title">experiencia</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">experiencia</p>
           <div class="--2_columns">
               <div class="--salidas_bloque_title">
                    <h2 class="--title js-scroll slide-left">Somos pioneros en <br class="d-none d-xl-block">la carrera <br class="d-none d-xl-block">tecnológica</h2>
                    <img src="{{ URL::to('/') }}/images/investigacion/experiencia.webp" alt=""  class="lazyload js-scroll slide-left">
               </div>
               <div class="--salidas_bloque_copy_1">
                    <h4 class="--salidas_bloque_copy_title js-scroll slide-right">- CREAMOS TECNOLOGÍA</h4>
                    <p class="--salidas_boque_copy_text js-scroll slide-right">Nuevas herramientas de gestión para clientes y despachos.</p>
                    <h4 class="--salidas_bloque_copy_title js-scroll slide-right">- UNA DÉCADA INNOVANDO</h4>
                    <p class="--salidas_boque_copy_text js-scroll slide-right">Desde 2008 trabajando como asesoría y empresa tecnológica.</p>
                    <h4 class="--salidas_bloque_copy_title js-scroll slide-right">- APOYO A LA DIGITALIZACIÓN</h4>
                    <p class="--salidas_boque_copy_text js-scroll slide-right">Apostamos por el futuro del desarrollo en el sector de las asesorías.</p>
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_id">
        <div class="--copy">
            <p class="--section_title">I+D</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">I+D</p>
            <h2 class="--title js-scroll slide-left">Estrategia de I+D</h2>
            <div class="--2_columns">
                <div class="--id_bloque_copy_1">
                    <h4 class="--id_bloque_copy_title js-scroll slide-left">INVESTIGACIÓN</h4>
                    <p class="--id_boque_copy_text js-scroll slide-left">En el ámbito de la gestión y la oferta de servicios de asesoría, <b>creemos en el potencial de las nuevas ideas.</b></p>
                </div>
                <div class="--id_bloque_copy_1">
                    <h4 class="--id_bloque_copy_title js-scroll slide-right">DESARROLLO</h4>
                    <p class="--id_boque_copy_text js-scroll slide-right"><b>Trabajamos mano a mano con un equipo de técnicos y especialistas para estar a la vanguardia del sector</b> y responder a la creciente demanda de innovación en el mercado. </p>
                </div>

            </div>
        </div>
    </div>

    <div class="--aside" id="b_practicas">
        <div class="--copy">
            <p class="--section_title">prácticas</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">prácticas</p>
            <div class="--2_columns">
                <div class="--practicas_bloque_copy_1">
                    <h2 class="--title js-scroll slide-left">Soluciones <br>de gestión<br> eficientes</h2>
                </div>
                <div class="--practicas_bloque_copy_1">
                    <p class="--practicas_boque_copy_text js-scroll slide-right">Impulsamos la revolución del modelo de negocio tradicional a partir de la aplicación de inteligencia artificial, big data, software cloud y servicios telemáticos.</p>
                </div>
            </div>
            <h2 class="--subtitle js-scroll slide-left">Más de 500 asesorías en España utilizan nuestra tecnología a diario</h2>
            <div class="--2_columns">
                <div class="--practicas_bloque_copy_1">
                    <ul>
                        <li class="js-scroll slide-left">Seguridad de la nube</li>
                        <li class="js-scroll slide-left">Información en tiempo real</li>
                        <li class="js-scroll slide-left">Mecanización de datos </li>
                        <li class="js-scroll slide-left">Control de calidad </li>
                        <li class="js-scroll slide-left">Optimización de tareas</li>
                    </ul>
                </div>
                <div class="--practicas_bloque_img">
                    <img src="{{ URL::to('/') }}/images/investigacion/cambios_1.webp" alt=""  class="lazyload js-scroll slide-right">
                </div>
            </div>
        </div>
    </div>

    <div class="--aside" id="b_escuela">
        <div class="--copy">
            <p class="--section_title">escuela</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">escuela</p>
            <div class="--3_columns">
                <div class="--escuela_claim">
                    <h2 class="--title"><u class="js-scroll slide-left">espacios de</u><br>
                        <u class="js-scroll slide-left"><span>transformación</span></u></h2>
                </div>
                <div class="--escuela_copy">
                    <h3 class="--subtitle js-scroll fade-in">TECNOLOGÍA VINCULADA A LA ESCUELA</h3>
                    <p class="js-scroll fade-in">EDASE se encarga de mostrarle a este colectivo la tecnología que hemos creado para agilizar las tareas de nuestros asesores y el resto de despachos.</p>
                </div>
                <div class="--escuela_copy">
                    <h3 class="--subtitle js-scroll fade-in">FORMACIÓN TECNOLÓGICA</h3>
                    <p class="js-scroll fade-in">Los alumnos aprenden a manejar nuestras herramientas para convertirse en los perfiles que necesita el sector, profesionales actualizados.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer-generico')

    

</div>
@endsection