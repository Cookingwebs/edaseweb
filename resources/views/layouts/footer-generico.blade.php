<div class="--aside --light" id="b_formulario_footer">
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
               {{-- <p class="--subtitle js-scroll slide-left">ACCESO <span>Y ADMISIÓN</span></p> --}}
                <h2 class="--title"><u class="js-scroll slide-left">ÚNETE</u><br>
                    <u class="js-scroll slide-left">A <span><b>EDASE</b></span></u></h2>
                <p class="--text js-scroll slide-left">Rellena el formulario o llámanos para acceder al máster y ser parte de nuestra cantera de asesores.</p>
           </div>
           <div class="--formulario_form js-scroll slide-right">
                <p class="--form_title">Muy pronto próxima convocatoria</p>
                <p class="--form_extra">¡PLAZAS LIMITADAS!</p>
                @include('layouts.form-footer')
           </div>
       </div>
    </div>
</div>