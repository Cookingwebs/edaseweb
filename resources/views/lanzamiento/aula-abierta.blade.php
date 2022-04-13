@extends('layouts.plantilla-promo')

@section('title', 'Aula Abierta')

@section('id-page', 'lanzamiento')

@section('content')
<div id="lanzamiento-page" class="--aula-abierta">
    <div class="--aside" id="b_header">
        <div class="--copy">
            <p class="--section_title">AULA ABIERTA</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <h1 class="--title">CONVIERTE<br class="d-none d-md-block"> <b class="--blue">LA GRAN RENUNCIA</b> EN TU<br class="d-none d-md-block"> <b class="--green">GRAN OPORTUNIDAD</b> PARA SER<br class="d-none d-md-block"> ASESOR FISCAL, LABORAL<br class="d-none d-md-block"> Y CONTABLE</h1>
           <h2 class="--subtitle">4, 5, 6 y 9 de mayo <br class="d-md-none"><span>¡TE ESPERAMOS!</span></h2>
           <div class="--cta --go_form_down">RESERVA TU PLAZA AHORA</div>
        </div>
    </div>

    <div class="--aside" id="b_jornada">
        <div class="--copy">
            
        </div>
        <div class="--section">
        </div>
        <div class="--content">
           <div class="--2_columns">
               <div class="--master_img d-none d-md-block">
                <img src="{{ URL::to('/') }}/images/mba/mba.webp" alt="" class="lazyload">
                <div class="--cta --go_form_down">INSCRÍBETE</div>
               </div>
               <div class="--master_copy_1">
                    <h2 class="--title">JORNADAS DE <br>AULA ABIERTA</h2>
                    <img src="{{ URL::to('/') }}/images/mba/mba.webp" alt="" class="d-md-none lazyload">
                    <p class="--subtitle">4, 5, 6 Y 9 DE MAYO</p>
                    <p class="--text_1">Descubre cómo pasar de trabajos precarios a empleos estables en el mundo de la asesoría <b>(aunque no tengas conocimientos ni experiencia previa).</b></p>
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
            <p class="--section_title d-xl-none">EXPERIENCIAS</p>
           <div class="swiper mySwiper --testimonio_1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="--content_testimonios_copy">
                    <p class="--content_testimonios_quote">“Llevaba toda la vida trabajando en hostelería y siempre que buscaba trabajo de lo mío me preguntaba</p>
                    <p class="--content_testimonios_quote"><b>- ¿Cómo me van a contratar a mí con un FP de Grado Medio?</b></p>
                    <p class="--content_testimonios_quote">Ahora trabajo a tiempo completo en una asesoría y puedo decir que soy asesora experta”</p>
                    <p class="--content_testimonios_author">Ana Moreno</p>
                </div>
                <div class="--content_testimonios_foto">
                    <img src="{{ URL::to('/') }}/images/lanzamiento/ana-moreno.webp" alt="" class="lazyload">
                </div>
              </div>
              <div class="swiper-slide d-md-none">
                <div class="--content_testimonios_copy">
                    <p class="--content_testimonios_quote"><b>“Pasé varios años haciendo tareas que no tenían que ver con lo que había estudiado.</b> Era un empleo totalmente distinto.</p>
                    <p class="--content_testimonios_quote">Ahora trabajo en lo que me gusta. Vengo a la asesoría cada día y no me pesa”</p>
                    <p class="--content_testimonios_author">Ana María Durán</p>
                </div>
                <div class="--content_testimonios_foto">
                    <img src="{{ URL::to('/') }}/images/lanzamiento/ana-maria-duran.webp" alt="" class="lazyload">
                </div>
                <div></div>
              </div>
            </div>
            <div class="swiper-button-next --testimonio_1_button_next"></div>
            {{-- <div class="swiper-button-prev"></div> --}}
        </div>

        <div class="swiper mySwiper --testimonio_2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <div class="--content_testimonios_foto">
                      <img src="{{ URL::to('/') }}/images/lanzamiento/ana-maria-duran.webp" alt="" class="lazyload">
                  </div>
                <div class="--content_testimonios_copy">
                    <p class="--content_testimonios_quote"><b>“Pasé varios años haciendo tareas que no tenían que ver con lo que había estudiado.</b> Era un empleo totalmente distinto.</p>
                    <p class="--content_testimonios_quote">Ahora trabajo en lo que me gusta. Vengo a la asesoría cada día y no me pesa”</p>
                    <p class="--content_testimonios_author">Ana María Durán</p>
                </div>
              </div>
            </div>
            <div class="swiper-button-prev --testimonio_2_button_prev"></div>
          </div>
        </div>
    </div>

    <div class="--aside" id="b_oportunidad">
        <div class="--copy">
            <p class="--section_title">LA GRAN OPORTUNIDAD</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">LA GRAN OPORTUNIDAD</p>
            <p class="--title">La mitad de los trabajadores en España piensan en cambiar de empleo</p>
            <div class="--2_columns --b_1">
                <div class="--oportunidad_copy_1">
                    <ul>
                        <li>En EEUU ya han pasado a la acción.</li>
                        <li>Lo llaman La Gran Renuncia, un movimiento masivo para decir “Basta”.</li>
                        <li>Basta de contratos basura, basta de salarios de risa, de agotamiento, de estrés, de condiciones precarias y de acabar aceptando puestos inferiores.</li>
                    </ul>
                 </div>
                <div class="--oportunidad_img">
                    <img src="{{ URL::to('/') }}/images/lanzamiento/gran-renuncia.webp" alt="" class="lazyload">
                </div>
            </div>
            <div class="--2_columns --b_2">
                <div class="--oportunidad_copy_2">
                    <h3 class="--title_2"><span>BASTA DE CONFORMARSE</span> CON CUALQUIER COSA</h3>
                    <p>Si has estudiado algo relacionado con la administración, contabilidad, finanzas, relaciones laborales o derecho…</p>
                </div>
                <div class="--oportunidad_copy_2">
                    <h3 class="--title_2">PASA DE LA GRAN RENUNCIA <span>A LA GRAN OPORTUNIDAD</span></h3>
                    <p>Empresas y despachos profesionales están buscando a perfiles cualificados con experiencia en el sector de la asesoría fiscal, laboral y contable.</p>
                 </div>
            </div>
        </div>
    </div>

    <div class="--aside" id="b_clases">
        <div class="--copy">
            <p class="--section_title">CLASES</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">CLASES</p>
            <div class="--2_columns">
                <div class="--clases_card">
                    <h3 class="--title"><span>CLASE</span> 01</h3>
                    <img src="{{ URL::to('/') }}/images/lanzamiento/clase-1.webp" alt="" class="lazyload">
                    <p class="--clases_copy">¿Qué debe saber un asesor laboral sobre la nueva reforma?</p>
                    <div class="--date">En directo el 4 de mayo a las 10h.</div>
                </div>
                <div class="--clases_card">
                    <h3 class="--title"><span>CLASE</span> 02</h3>
                    <img src="{{ URL::to('/') }}/images/lanzamiento/clase-2.webp" alt="" class="lazyload">
                    <p class="--clases_copy">¿Cómo contabiliza un asesor contable?</p>
                    <div class="--date">En directo el 5 de mayo a las 10h.</div>
                </div>
            </div>
            <div class="--2_columns">
                <div class="--clases_card">
                    <h3 class="--title"><span>CLASE</span> 03</h3>
                    <img src="{{ URL::to('/') }}/images/lanzamiento/clase-3.webp" alt="" class="lazyload">
                    <p class="--clases_copy">¿Cómo declara el IVA un asesor fiscal?</p>
                    <div class="--date">En directo el 6 de mayo a las 10h.</div>
                </div>
                <div class="--clases_card">
                    <h3 class="--title"><span>CLASE</span> 04</h3>
                    <img src="{{ URL::to('/') }}/images/lanzamiento/clase-4.webp" alt="" class="lazyload">
                    <p class="--clases_copy">¿Cuál es el camino para conseguir un buen puesto como asesor experto?</p>
                    <div class="--date">En directo el 9 de mayo a las 10h.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="--aside" id="b_quienes">
        <div class="--copy">
            <p class="--section_title">quienes somos</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">quienes somos</p>
            <p class="--title">¿Qué es la Escuela<br> de Asesores?</p>
            <div class="--2_columns --b_1">
                <div class="--quienes_copy_1">
                    <p>Es la 1º escuela especializada en gestión y asesoramiento que nace de la experiencia de <b>Ayuda T Pymes,</b> la asesoría que más crece en España.</p>
                    <img src="{{ URL::to('/') }}/images/svg/ayudatpymes.svg" alt="" class="lazyload">
                </div>
                <div class="--quienes_img">
                    <img src="{{ URL::to('/') }}/images/lanzamiento/quienes_somos.webp" alt="" class="lazyload">
                </div>
            </div>
            <div class="--2_columns --b_2">
                <div class="--quienes_copy_2">
                    <h3 class="--title_2">FORMAMOS A <br>TODA NUESTRA <br>PLANTILLA</h3>
                    <p>Nos dimos cuenta de las grandes dificultades que existen en el mercado para contratar a profesionales actualizados</p>
                </div>
                <div class="--quienes_copy_2">
                    <h3 class="--title_2">CREAMOS <br>EDASE</h3>
                    <p><b>Hemos incorporado a más de 1.000 alumnos al sector en el último año.</b> Muchos de ellos, incluso, contratados por nosotros mismos.</p>
                 </div>
            </div>
        </div>
    </div>
    <div class="--aside" id="b_vida">
        <div class="--copy">
            <p class="--section_title">escuela de asesores</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <h3 class="--vida_title">conoce <span>nuestra escuela</span></h3>
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
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria4.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_2_div_2">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria5.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_2_div_3">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria6.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_2_div_4">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria7.webp" alt="" class="--equipo_foto_1 lazyload">
                    </div>
                    <div class="--vida_fila_2_div_5">
                        <img src="{{ URL::to('/') }}/images/conocenos/galeria8.webp" alt="" class="--equipo_foto_1 lazyload">
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
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria4.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria5.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria6.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria7.webp" alt="" class="--equipo_foto_1 lazyload">
                </div>
                <div class="--vida_bloque_img">
                    <img src="{{ URL::to('/') }}/images/conocenos/galeria8.webp" alt="" class="--equipo_foto_1 lazyload">
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
                        gratis <br>
                        <span>al Aula <br class="d-md-none d-xl-block">
                        Abierta</span></h2>
                    <p class="--text">Si quieres que compartamos contigo el camino más directo para adentrarte al mundo de la asesoría, inscríbete al Aula Abierta gratis, súmate a <span>#LaGranOportunidad.</span></p>
               </div>
               <div class="--formulario_form">
                    <p class="--form_title">Da el primer paso hacia tu carrera profesional como asesor experto.</p>
                    @include('layouts.form-footer', ['cta_copy' => 'RESERVA TU PLAZA AHORA'])
               </div>
           </div>
        </div>
    </div>

</div>
@endsection