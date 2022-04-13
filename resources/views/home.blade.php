@extends('layouts.plantilla')

@section('title', 'Home')

@section('id-page', 'home')

@section('content')
    <div id="home-page">
        <div id="b_cabecera_home">
            <video autoplay muted loop id="myVideo" preload="none" class="lazyload">
                <source src="/images/HOME_EDASE.mp4" type="video/mp4">
              </video>
            <div class="--copy">
                <h2 class="--title">Tu<br>
                    futuro
                    <b>empieza
                    <span>aquí</span></b></h2>
                <h1 class="--subtitle">Escuela <br class="d-md-none">de formación <br class="d-md-none">para asesores <br class="d-md-none">del mañana</h1>
                <div class="--arrow d-md-none">
                    <img src="{{ URL::to('/') }}/images/svg/arrow-down-white.svg" alt="" class="lazyload">
                    <img src="{{ URL::to('/') }}/images/svg/arrow-down-white.svg" alt="" class="lazyload">
                    <img src="{{ URL::to('/') }}/images/svg/arrow-down-white.svg" alt="" class="lazyload">
                </div>
            </div>
            <div class="--arrow d-none d-md-block">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-white.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-white.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-white.svg" alt="" class="lazyload">
            </div>
        </div>
        <div class="--aside" id="b_creamos">
            <div class="--copy">
                <p class="--section_title">creamos escuela</p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <h2 class="--title">CREAMOS<br> ESCUELA</h2>
                <div class="--subaside_1">
                    <div class="--subaside_1_copy">
                        <ul>
                            <li data="1"><span>13</span> AÑOS DE EXPERIENCIA</li>
                            <li data="2"><span>350</span> TRABAJADORES</li>
                            <li data="3"><span>15000</span> CLIENTES</li>
                        </ul>
                    </div>
                    <div class="--subaside_1_carrousel">
                        <div class="--container_carrousel" id="__container_carrousel">
                            <span id="__page_carrousel"><span>1</span>/4</span>
                            <div class="--b_title_carrousel">
                                <h3 class="--active" data="1">Somos la asesoría que más crece en España</h3>
                                <h3 data="2">La formación es el motor de nuestro crecimiento</h3>
                                <h3 data="3">En contacto con la realidad de autónomos y pymes</h3>
                                <h3 data="4">Compartimos nuestras competencias como empresa líder</h3>
                            </div>
                            <div class="--b_copy_carrousel">
                                <p class="--active" data="1">Ayuda T Pymes es la 1º asesoría que ha revolucionado el asesoramiento llevando la tecnología a todos los procesos.</p>
                                <p data="2">Hemos formado a toda nuestra plantilla desde sus inicios con la misma metodología y contenidos.</p>
                                <p data="3">Nos actualizamos día a día con las nuevas necesidades que van surgiendo.</p>
                                <p data="4">Ya no valen las teorías. Los clientes quieren soluciones rápidas y eficientes.</p>
                            </div>
                            <div class="--franja_carrousel" data="1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="--aside" id="b_niveles">
            <div class="--copy">
                <p class="--section_title">PERFILES</p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <p class="--section_title d-xl-none">PERFILES</p>
                <div class="--content_copy">
                    <h2 class="--title">Preparamos<br> a profesionales<br> de la asesoría a todos<br> los niveles</h2>
                </div>
                <div class="--transition_niveles" id="__transition_niveles">
                    <div class="--content_transition" data="1">
                        <div class="--b_title_transition">
                            <h3 class="--active" data="1">Sin conocimientos ni experiencia previa</h3>
                            <h3 data="2">Con conocimientos</h3>
                            <h3 data="3">Con experiencia</h3>
                            <h3 data="4">Con servicios de asesoramiento</h3>
                        </div>
                        <div class="--b_copy_transition">
                            <p class="--active" data="1">Encuentra tu sitio partiendo de cero</p>
                            <p data="2">Da el salto en tu carrera y trabaja como asesor experto</p>
                            <p data="3">Consigue un puesto directivo o abre tu propia asesoría</p>
                            <p data="4">Proyecta el futuro de tu negocio con las últimas novedades</p>
                        </div>
                    </div>
                    <div class="--mascara_transition">
                    </div>
                    <div class="--progress_transition" data="1"></div>
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
                <!-- Slider main container -->
                <div class="swiper mySwiper --testimonio_1">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Es muy diferente a la universidad. <b>Aquí te preparan para desenvolverte en tu día a día”</b></p>
                            <p class="--content_testimonios_author">José Ramón Rosa</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/jose-ramon-rosa.webp" alt="" class="lazyload">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote"><b>“No son de los que dan teoría que luego no te sirve en tu vida laboral”</b></p>
                            <p class="--content_testimonios_author">Javier Arroyo</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/jose-miguel-molina.webp" alt="" class="lazyload">
                        </div>
                        <div></div>
                      </div>
                    </div>
                    <div class="swiper-button-next --testimonio_1_button_next"></div>
                    {{-- <div class="swiper-button-prev"></div> --}}
                </div>
                <div class="swiper mySwiper --testimonio_mobile d-md-none">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Es muy diferente a la universidad. <b>Aquí te preparan para desenvolverte en tu día a día”</b></p>
                            <p class="--content_testimonios_author">José Ramón Rosa</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/jose-ramon-rosa.webp" alt="" class="lazyload">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote"><b>“No son de los que dan teoría que luego no te sirve en tu vida laboral”</b></p>
                            <p class="--content_testimonios_author">Javier Arroyo</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/jose-miguel-molina.webp" alt="" class="lazyload">
                        </div>
                        <div></div>
                      </div>
                      <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Gracias a la escuela estoy <b>trabajando actualmente como asesora”</b></p>
                            <p class="--content_testimonios_author">Cristina Riaza</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/cristina-riaza.webp" alt="" class="lazyload">
                        </div>
                        <div></div>
                      </div>
                      <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Están orientados a lo que realmente interesa: <b>la práctica”</b></p>
                                <p class="--content_testimonios_author">Miriam Magrañal</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/teresa-lora.webp" alt="" class="lazyload">
                        </div>
                        <div></div>
                      </div>
                    </div>
                    <div class="swiper-button-next --testimonio_mobile_button_next"></div>
                    {{-- <div class="swiper-button-prev"></div> --}}
                </div>

                <div class="swiper mySwiper --testimonio_2">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <div></div>
                          <div class="--content_testimonios_foto">
                              <img src="{{ URL::to('/') }}/images/cristina-riaza.webp" alt="" class="lazyload">
                          </div>
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Gracias a la escuela estoy <b>trabajando actualmente como asesora”</b></p>
                            <p class="--content_testimonios_author">Cristina Riaza</p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                            <div></div>
                          <div class="--content_testimonios_foto">
                              <img src="{{ URL::to('/') }}/images/teresa-lora.webp" alt="" class="lazyload">
                          </div>
                            <div class="--content_testimonios_copy">
                                <p class="--content_testimonios_quote">“Están orientados a lo que realmente interesa: <b>la práctica”</b></p>
                                <p class="--content_testimonios_author">Miriam Magrañal</p>
                            </div>
                      </div>
                    </div>
                    <div class="swiper-button-prev --testimonio_2_button_prev"></div>
                  </div>
                </div>
                  
            </div>

        <div class="--aside" id="b_profesorado">
            <div class="--copy">
                <p class="--section_title">PROFESORADO </p>
            </div>
            <div class="--section">
            </div>
            <div class="--content">
                <p class="--section_title d-xl-none">PROFESORADO</p>
                @include('layouts.profesorado')
            </div>
        </div>

        <div class="--aside" id="b_huella">
            <div class="--arrow_interior d-none d-md-block --bottom">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <div class="--content">
                <div class="--huella_claim">
                    <h2 class="--huella_title">Estudiar.<br>
                        Superarse.<br>
                        <span>dejar huella</span></h2>
                </div>
                <div class="--huella_copy">
                    <p class="--huella_subtitle">
                        EL <span>70%</span> DE NUESTROS ALUMNOS COMPATIBILIZA SU TRABAJO CON LA FORMACIÓN 
                    </p>
                    <p class="--huella_text">
                        Tenemos una metodología flexible que te permite organizar tu tiempo de estudio 
                    </p>
                </div>
                <div class="--huella_img">
                    <div class="--huella_img_mascara">
                        <img src="{{ URL::to('/') }}/images/dejar-huella.webp" alt="" class="lazyload">
                        <div class="--huella_franja"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
@endsection
