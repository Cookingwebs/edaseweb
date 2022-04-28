@extends('layouts.plantilla')

@section('title', 'Causa social')

@section('id-page', 'social')

@section('content')
<div id="social-page">
    <div id="b_cabecera">
        <div class="--copy">
            <h1 class="--title">CAUSA SOCIAL</h1>
        </div>
    </div>
    <div class="--aside" id="b_compromiso">
        <div class="--copy">
            <p class="--section_title">COMPROMISO</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <h2 class="--title"><u class="slide-left-delay-0 --first-content">Comprometidos</u><br> <u class="slide-left-delay-1 --first-content">con la <b>igualdad</b></u><br> <u class="slide-left-delay-3 --first-content_2"><b>de oportunidades</b></u></h2>
            <p class="--subtitle slide-left-delay-4 --first-content_3">EDASE trabaja activamente por la inclusión social y empleabilidad de las personas</p>
            <div class="--2_columns">
                <div class="--compromiso_bloque_copy">
                    <p class="--compromiso_bloque_copy_title js-scroll slide-left">CREAMOS TECNOLOGÍA</p>
                    <p class="--compromiso_boque_copy_text js-scroll slide-left">A partir de una docencia alineada con las necesidades actuales del sector, <b>pretendemos incorporar a profesionales altamente cualificados al ámbito laboral.</b></p>
                </div>
                <div class="--compromiso_bloque_copy">
                    <p class="--compromiso_bloque_copy_title js-scroll slide-right">GENERACIÓN DE OPORTUNIDADES</p>
                    <p class="--compromiso_boque_copy_text js-scroll slide-right">Llevamos a cabo acciones de justicia social con el principal objetivo de ofrecer, de forma igualitaria, <b>posibilidades de acceso a puestos cualificados.</b></p>
                </div>
            </div>
            <p class="--extra js-scroll fade-in">Colaboramos con</p>
            <div class="--logos_colaboradores">
                <img src="{{ URL::to('/') }}/images/social/logo-puerto.webp"  class="lazyload js-scroll fade-in">
                <img src="{{ URL::to('/') }}/images/social/logo-eu.webp"  class="lazyload js-scroll fade-in">
                <img src="{{ URL::to('/') }}/images/social/logo-junta.webp"  class="lazyload js-scroll fade-in">
                <img src="{{ URL::to('/') }}/images/social/logo-eracis.webp"  class="lazyload js-scroll fade-in">
                <img src="{{ URL::to('/') }}/images/social/logo-andalucia.webp"  class="lazyload js-scroll fade-in">
            </div>
        </div>
    </div>

   <div class="--aside" id="b_acciones">
        <div class="--copy">
            <p class="--section_title">ACCIONES</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">ACCIONES</p>
            <div class="--acciones_bloque">
                <p class="--acciones_title js-scroll slide-left"><span>·</span> PRO BONOS</p>
                <p class="--acciones_copy js-scroll slide-left">La Escuela de Asesores contribuye a la formación integral de personas migrantes, pertenecientes a colectivos desfavorecidos y usuarias de ONG que ya cuentan con estudios o experiencia relacionada.</p>
                <p class="--acciones_title js-scroll slide-left"><span>·</span> TALLERES DE FORMACIÓN</p>
                <p class="--acciones_copy js-scroll slide-left">Ponemos el conocimiento de nuestros especialistas a disposición de la inserción sociolaboral desde el Programa ERACIS.</p>
                <p class="--acciones_title js-scroll slide-left"><span>·</span> BECAS DEL 100%</p>
                <p class="--acciones_copy js-scroll slide-left">En el último año hemos concedido 10 becas totales a personas con necesidades formativas.</p>
            </div>
        </div>
   </div>

   <div class="--aside" id="b_experiencias">
    <div class="--copy">
        <p class="--section_title">EXPERIENCIAS</p>
    </div>
    <div class="--section">
    </div>
    <div class="--content">
        <p class="--section_title d-xl-none">EXPERIENCIAS</p>
        <div class="--2_columns">
            <div class="--experiencias_claim">
                <p class="--title"><u class="js-scroll slide-left">Un futuro</u> <br><u class="js-scroll slide-left">laboral</u> <br><span><u class="js-scroll slide-left">más justo</u></span></p>
            </div>
            <div class="swiper mySwiper --testimonio_1 js-scroll slide-right">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Fui becada al 100% y está siendo una oportunidad perfecta para ampliar, afianzar, aprender y mejorar mi formación. A nivel profesional me abrirá muchísimas puertas”</p>
                            <p class="--content_testimonios_author">Eva María Pino, <span>Becado por EDASE</span></p>
                        </div>
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Me dieron una beca para estudiar y conseguir una mejora laboral, y estoy muy agradecido. La formación es muy práctica y útil para desempeñar el trabajo de asesor”</p>
                            <p class="--content_testimonios_author">Manuel Sánchez, <span>Becado por EDASE</span></p>
                        </div>
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Esta beca es una gran ayuda para mi vida laboral. Además, me dan muchas facilidades para compaginar los estudios con mis otras actividades”</p>
                            <p class="--content_testimonios_author">Carlos Sanchidrian, <span>Becado por EDASE</span></p>
                        </div>
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Estoy muy contenta con la oportunidad que me ha brindado la escuela. Me están ayudando a reciclarme bastante en mis estudios para poder optar a un puesto mejor”</p>
                            <p class="--content_testimonios_author">Jacinta Barrena, <span>Becado por EDASE</span></p>
                        </div>
                        <div></div>
                    </div>
                </div>
                <div class="swiper-button-next --testimonio_1_button_next"></div>
                {{-- <div class="swiper-button-prev"></div> --}}
            </div>
        </div>
    </div>
</div>

    @include('layouts.footer-generico')

    

</div>
@endsection