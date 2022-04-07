@extends('layouts.plantilla')

@section('title', 'Home')

@section('id-page', 'home')

@section('content')
    <div id="test-page">
        <div id="b_cabecera">
            <div class="--copy">
                <p class="--title">Testing</p>
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
                            <img src="{{ URL::to('/') }}/images/foto-testimonio_1.jpg" alt="" class="lazyload">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“Gracias a la escuela estoy <b>trabajando actualmente como asesora”</b></p>
                            <p class="--content_testimonios_author">Cristina Riaza</p>
                        </div>
                        <div class="--content_testimonios_foto">
                            <img src="{{ URL::to('/') }}/images/foto-testimonio_1.jpg" alt="" class="lazyload">
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
                          <div></div>
                          <div class="--content_testimonios_foto">
                              <img src="{{ URL::to('/') }}/images/foto-testimonio_1.jpg" alt="" class="lazyload">
                          </div>
                        <div class="--content_testimonios_copy">
                            <p class="--content_testimonios_quote">“No tienen nada que ver con otras formaciones. <b>Esto es como jugar en el Real Madrid”</b></p>
                            <p class="--content_testimonios_author">José Miguel Molina</p>
                        </div>
                      </div>
                      <div class="swiper-slide">
                            <div></div>
                          <div class="--content_testimonios_foto">
                              <img src="{{ URL::to('/') }}/images/foto-testimonio_1.jpg" alt="" class="lazyload">
                          </div>
                            <div class="--content_testimonios_copy">
                                <p class="--content_testimonios_quote">“No tienen nada que ver con otras formaciones. <b>Esto es como jugar en el Real Madrid”</b></p>
                                <p class="--content_testimonios_author">José Miguel Molina</p>
                            </div>
                      </div>
                    </div>
                    <div class="swiper-button-prev --testimonio_2_button_prev"></div>
                  </div>
            </div>
                  
            </div>
        <link
        rel="stylesheet"
        href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
      />
      
      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
      <script>
        var swiper = new Swiper(".--testimonio_1", {
          spaceBetween: 30,
          loop: true,
          navigation: {
            nextEl: ".--testimonio_1_button_next",
            prevEl: ".--testimonio_1_button_prev",
            },
        });
        var swiper = new Swiper(".--testimonio_2", {
          spaceBetween: 30,
          loop: true,
          navigation: {
            nextEl: ".--testimonio_2_button_next",
            prevEl: ".--testimonio_2_button_prev",
            },
        });
      </script>
       
    </div>
@endsection
