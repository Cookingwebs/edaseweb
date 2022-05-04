@extends('layouts.plantilla-promo', ['chat' => $chat])

@section('title', 'Master')

@section('id-page', 'master-contador')

@section('content')
    
<div id="master_contador-page" class="--aula-abierta">
    <div class="--aside" id="b_header">
        <div class="--copy">
            <p class="--section_title">#LAGRANOPORTUNIDAD</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <h1 class="--title">MÁSTER ASESOR EXPERTO</h1>
           <h2 class="--subtitle">EDICIÓN ESPECIAL MAYO DE 2022</h2>
           <p class="--extra">SOLICITA UNA DE LAS PLAZAS BECADAS<br> ANTES DEL 17 DE MAYO</p>
           <div class="--contador">
            <div class="--contador-item" data="days">
                <p class="--contador-number" id="days"></p>
                <p id="__daysText">días</p>
            </div>
            <div class="--contador-item" data="hours">
                <p class="--contador-number" id="hours"></p>
                <p id="__hoursText">horas</p>
            </div>
            <div class="--contador-item" data="minutes">
                <p class="--contador-number" id="minutes"></p>
                <p id="__minutesText">minutos</p>
            </div>
            <div class="--contador-item" data="seconds">
                <p class="--contador-number" id="seconds"></p>
                <p id="__secondsText">segundos</p>
            </div>
            <script defer>
                document.addEventListener('DOMContentLoaded', () => { 
          
                  //===
                  // VARIABLES
                  //===
                  const DATE_TARGET = new Date('05/06/2022 0:01 AM');
                  // DOM for render
                  const SPAN_DAYS = document.querySelector('p#days');
                  const SPAN_HOURS = document.querySelector('p#hours');
                  const SPAN_MINUTES = document.querySelector('p#minutes');
                  const SPAN_SECONDS = document.querySelector('p#seconds');
                  // Milliseconds for the calculations
                  const MILLISECONDS_OF_A_SECOND = 1000;
                  const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
                  const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
                  const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24
          
                  //===
                  // FUNCTIONS
                  //===
          
                  /**
                  * Method that updates the countdown and the sample
                  */
                  function updateCountdown() {
                      // Calcs
                      const NOW = new Date()
                      if( NOW < DATE_TARGET){
                          const DURATION = DATE_TARGET - NOW;
                          const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
                          const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
                          const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
                          const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
                          // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)
              
                          // Render
                          SPAN_DAYS.textContent = REMAINING_DAYS;
                          SPAN_HOURS.textContent = REMAINING_HOURS;
                          SPAN_MINUTES.textContent = REMAINING_MINUTES;
                          SPAN_SECONDS.textContent = REMAINING_SECONDS;
                          if(REMAINING_DAYS == 1){
                              document.querySelector('p#__daysText').textContent = 'día';
                            }else{
                            document.querySelector('p#__daysText').textContent = 'días';
                          }
                          if(REMAINING_HOURS == 1){
                              document.querySelector('p#__hoursText').textContent = 'hora';
                            }else{
                            document.querySelector('p#__hoursText').textContent = 'horas';
                          }
                          if(REMAINING_MINUTES == 1){
                              document.querySelector('p#__minutesText').textContent = 'minuto';
                            }else{
                            document.querySelector('p#__minutesText').textContent = 'minutos';
                          }
                          if(REMAINING_SECONDS == 1){
                              document.querySelector('p#__secondsText').textContent = 'segundo';
                            }else{
                            document.querySelector('p#__secondsText').textContent = 'segundos';
                          }
                      }else{
                            SPAN_DAYS.textContent = '0';
                          SPAN_HOURS.textContent = '00';
                          SPAN_MINUTES.textContent = '00';
                          SPAN_SECONDS.textContent = '00';
                      }
                  }
          
                  //===
                  // INIT
                  //===
                  updateCountdown();
                  // Refresh every second
                  setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
              });
              </script>
           </div>
           <div class="--cta --go_form_down">REALIZAR SOLICITUD</div>
        </div>
    </div>

    <div class="--aside" id="b_punto">
        <div class="--copy">
            <p class="--section_title">PUNTO DE PARTIDA</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">PUNTO DE PARTIDA</p>
            <h2 class="--title js-scroll slide-left">ES HORA DE DARLE <br>UN GIRO A TU VIDA</h2>
            <p class="--subtitle js-scroll slide-left">SI ESTÁS EN ALGUNO<br> DE ESTOS CASOS:</p>
           <div class="--2_columns">
               <div class="--punto_bloque_copy js-scroll slide-left">
                    <h4 class="--punto_bloque_copy_title">BUSCAS UN EMPLEO <br>DE CALIDAD</h4>
                    <p class="--punto_bloque_copy_text">No estás dispuesto a seguir conformándote con puestos inferiores y contratos basura. </p>
               </div>
               <div class="--punto_bloque_copy js-scroll slide-right">
                    <h4 class="--punto_bloque_copy_title">TIENES ESTUDIOS <br>RELACIONADOS</h4>
                    <p class="--punto_bloque_copy_text">Te formaste en administración, finanzas, contabilidad, RRHH o derecho.</p>
               </div>
           </div>
           <div class="--2_columns">
               <div class="--punto_bloque_copy js-scroll slide-left">
                    <h4 class="--punto_bloque_copy_title">NECESITAS RENOVAR <br>TU FORMACIÓN</h4>
                    <p class="--punto_bloque_copy_text">Ya trabajas en el sector de la asesoría, pero te sientes limitado en algunas áreas.</p>
               </div>
               <div class="--punto_bloque_copy js-scroll slide-right">
                    <h4 class="--punto_bloque_copy_title">TE GUSTARÍA MONTAR <br>UNA ASESORÍA</h4>
                    <p class="--punto_bloque_copy_text">Quieres ofrecer servicios de asesoría a tus propios clientes, pero no sabes por dónde empezar.</p>
               </div>
           </div>
           <div class="--cta --go_form_down">SOLICITA TU PLAZA</div>
        </div>
    </div>

    <div class="--aside" id="b_ruta">
        <div class="--copy">
            <p class="--section_title">hoja de ruta</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">hoja de ruta</p>
            <h2 class="--title js-scroll slide-left">EMPIEZA AQUÍ TU<br> GRAN OPORTUNIDAD</h2>
            <p class="--subtitle js-scroll slide-left">PREPÁRATE PARA TRABAJAR COMO ASESOR EXPERTO</p>
           <div class="--2_columns">
               <div class="--ruta_bloque_copy js-scroll slide-left">
                    <h4 class="--ruta_bloque_copy_title">BUSCAS UN EMPLEO <br>DE CALIDAD</h4>
                    <p class="--ruta_bloque_copy_text">No estás dispuesto a seguir conformándote con puestos inferiores y contratos basura. </p>
               </div>
               <div class="--ruta_bloque_copy js-scroll slide-right">
                    <h4 class="--ruta_bloque_copy_title">TIENES ESTUDIOS <br>RELACIONADOS</h4>
                    <p class="--ruta_bloque_copy_text">Te formaste en administración, finanzas, contabilidad, RRHH o derecho.</p>
               </div>
           </div>
           <div class="--2_columns">
               <div class="--ruta_bloque_copy js-scroll slide-left">
                    <h4 class="--ruta_bloque_copy_title">NECESITAS RENOVAR <br>TU FORMACIÓN</h4>
                    <p class="--ruta_bloque_copy_text">Ya trabajas en el sector de la asesoría, pero te sientes limitado en algunas áreas.</p>
               </div>
               <div class="--ruta_bloque_copy js-scroll slide-right">
                    <h4 class="--ruta_bloque_copy_title">TE GUSTARÍA MONTAR <br>UNA ASESORÍA</h4>
                    <p class="--ruta_bloque_copy_text">Quieres ofrecer servicios de asesoría a tus propios clientes, pero no sabes por dónde empezar.</p>
               </div>
           </div>
           <div class="--cta --go_form_down">SOLICITA TU PLAZA</div>
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