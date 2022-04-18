@extends('layouts.plantilla')

@section('title', 'Metodologia')

@section('id-page', 'metodologia')

@section('content')
<div id="metodologia-page">
    <div id="b_cabecera">
        <div class="--copy">
            <h1 class="--title">Metodología</h1>
        </div>
    </div>
    <div class="--aside" id="b_pilares">
        <div class="--copy">
            <p class="--section_title">PILARES</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <h2 class="--title slide-left-delay-0 --first-content">ESTUDIAR EN <b>EDASE</b></h2>
           <h2 class="--subtitle slide-left-delay-2 --first-content_2">LA ESCUELA DE ASESORES APUESTA POR<br class="d-none d-md-block">UNA METODOLOGÍA <b>BASADA EN 3 PILARES:</b></h2>
           <div class="--2_columns">
               <div class="--pilares_bloque_copy">
                <h3 class="--pilares_bloque_copy_title slide-left-delay-4 --first-content_3">- Empleabilidad real</h3>
                <p class="--pilares_boque_copy_text slide-left-delay-4 --first-content_3">Desarrollas habilidades para adaptarte a la demanda actual del sector.</p>
                <h3 class="--pilares_bloque_copy_title slide-left-delay-4 --first-content_3">- Experiencia práctica</h3>
                <p class="--pilares_boque_copy_text slide-left-delay-4 --first-content_3">Aplicas los conocimientos en casos reales utilizando la tecnología de nuestros despachos.</p>
                <h3 class="--pilares_bloque_copy_title slide-left-delay-4 --first-content_3">- Apoyo profesional</h3>
                <p class="--pilares_boque_copy_text slide-left-delay-4 --first-content_3">Cuentas con el apoyo permanente de especialistas en las distintas materias</p>
               </div>
               <div class="--pilares_bloque_img slide-right-delay-4 --first-content_3">
                    <img src="{{ URL::to('/') }}/images/metodologia/metodologia.webp" alt=""  class="lazyload">
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_especialistas">
        <div class="--copy">
            <p class="--section_title">ACOMPAÑAMIENTO</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">ACOMPAÑAMIENTO</p>
           <div class="--2_columns">
               <div class="--especialistas_bloque_title">
                <h2 class="--title js-scroll slide-left">Te enseñan especialistas en activo</h2>
               </div>
               <div class="--especialistas_bloque_copy_1">
                   <p class="--text_1 js-scroll slide-right">El profesorado compatibiliza su labor docente con su actividad profesional para conocer las necesidades de empresas y asesorías.</p>
               </div>
           </div>
           <div class="--2_columns">
               <div class="--especialistas_bloque_img">
                <img src="{{ URL::to('/') }}/images/metodologia/metodologia_2.webp" alt=""  class="lazyload js-scroll slide-left">
               </div>
               <div class="--especialistas_bloque_copy_2">
                <h3 class="--pilares_bloque_copy_title js-scroll slide-right">- SERVICIOS DE TUTORÍAS</h3>
                <p class="--pilares_boque_copy_text js-scroll slide-right">Resuelven todas tus consultas a través de tutorías online, teléfono o chat.</p>
                <h3 class="--pilares_bloque_copy_title js-scroll slide-right">- COACHING</h3>
                <p class="--pilares_boque_copy_text js-scroll slide-right">Trazan una ruta de aprendizaje personal dirigida a tus objetivos</p>
               </div>
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
            <div class="--arrow_interior d-none d-md-block --bottom">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <p class="--section_title d-xl-none">EXPERIENCIAS</p>
           <div class="--2_columns">
               <div class="--experiencias_bloque_title">
                <h2 class="--title js-scroll slide-left">Casos 100% prácticos</h2>
               </div>
               <div class="--experiencias_bloque_copy_1">
                   <p class="--text_1 js-scroll slide-right">Los alumnos resuelven casos de clientes reales bajo supervisión para obtener el control práctico de todos los procesos, trámites y herramientas.</p>
               </div>
           </div>
           <div class="swiper mySwiper --testimonio_1 js-scroll slide-left">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="--content_testimonios_copy">
                    <p class="--content_testimonios_quote"><b>“No son de los que dan teoría que luego no te sirve en tu vida laboral”</b></p>
                    <p class="--content_testimonios_author">Javier Arroyo</p>
                </div>
                <div class="--content_testimonios_foto">
                    <img src="{{ URL::to('/') }}/images/jose-miguel-molina.webp" alt="" class="lazyload">
                </div>
              </div>
              <div class="swiper-slide d-md-none">
                <div class="--content_testimonios_copy">
                    <p class="--content_testimonios_quote">“Los casos prácticos se ajustan muy bien a la <b>realidad diaria de una asesoría”</b></p>
                    <p class="--content_testimonios_author">Noélia Pérez</p>
                </div>
                <div class="--content_testimonios_foto">
                    <img src="{{ URL::to('/') }}/images/cristina-riaza.webp" alt="" class="lazyload">
                </div>
                <div></div>
              </div>
            </div>
            <div class="swiper-button-next --testimonio_1_button_next"></div>
            {{-- <div class="swiper-button-prev"></div> --}}
        </div>

        <div class="swiper mySwiper --testimonio_2 js-scroll slide-right">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <div class="--content_testimonios_foto">
                      <img src="{{ URL::to('/') }}/images/metodologia/noelia-perez.webp" alt="" class="lazyload">
                  </div>
                <div class="--content_testimonios_copy">
                    <p class="--content_testimonios_quote">“Los casos prácticos se ajustan muy bien a la <b>realidad diaria de una asesoría”</b></p>
                    <p class="--content_testimonios_author">Noélia Pérez</p>
                </div>
              </div>
            </div>
            <div class="swiper-button-prev --testimonio_2_button_prev"></div>
          </div>
        </div>
    </div>

    @include('layouts.footer-generico')
</div>
@endsection