@extends('layouts.plantilla-promo', ['chat' => $chat])

@section('title', 'Recomienda')

@section('id-page', 'recomienda')

@section('content')
    
<div id="recomienda-page">
    <div class="--aside" id="b_formulario">
        <div class="--copy">
            <p class="--section_title">TRAE UN AMIGO</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <div class="--2_columns">
               <div class="--formulario_claim">
                    <h1 class="--title"><u class="slide-left-delay-0 --first-content">Trae un amigo</u><br>
                        <u class="slide-left-delay-1 --first-content">y te regalamos</u> <br>
                            <u class="slide-left-delay-2 --first-content">un <span>cheque de</span></u> <br>
                            <u class="slide-left-delay-3 --first-content"><span>Amazon de 100€</span></u></h1>
                    <ul class="slide-left-delay-4 --first-content_2">
                        <li class="--down_one">¿Cómo funciona la <b>PROMO AMIGO?</b></li>
                    </ul>
               </div>
               <div class="--formulario_form fade-in-delay-4 --first-content_2">
                    <p class="--form_title">Matrícula GRATIS para tus amigos.</p>
                    <p class="--form_extra">Ahorrarán 95€</p>
                    @include('layouts.form-recomienda')
               </div>
           </div>
        </div>
    </div>

    <div class="--aside" id="b_punto" data="down_2">
        <div class="--copy">
            <p class="--section_title">¿Cómo funciona?</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">¿Cómo funciona?</p>
            <h2 class="--title js-scroll slide-left">¿CÓMO FUNCIONA <br class="d-none d-md-block">LA PROMO AMIGO?</h2>
           <div class="--2_columns">
               <div class="--punto_bloque_copy js-scroll slide-left">
                    <h4 class="--punto_bloque_copy_title">RECOMIENDA EL <br>MÁSTER A UN AMIGO</h4>
                    <p class="--punto_bloque_copy_text">Habla con él y rellena este formulario con sus datos y los tuyos.</p>
               </div>
               <div class="--punto_bloque_copy js-scroll slide-right">
                    <h4 class="--punto_bloque_copy_title">SI TU AMIGO SE <br>MATRICULA EN <br>EL MÁSTER</h4>
                    <p class="--punto_bloque_copy_text">Recibirás <b>100€</b> en una tarjeta de Amazon y tu amigo no pagará matrícula (ahorrará 95€).</p>
               </div>
           </div>
           <div class="--2_columns">
               <div class="--punto_bloque_copy js-scroll slide-left">
                    <h4 class="--punto_bloque_copy_title">LO LLAMAREMOS <br>PARA INFORMARLO <br>SIN NINGÚN COMPROMISO</h4>
                    <p class="--punto_bloque_copy_text">Es importante que lo avises de esto, no queremos molestar a nadie.</p>
               </div>
               <div class="--punto_bloque_copy js-scroll slide-right">
                    
               </div>
           </div>
           <h4 class="--subtitle js-scroll slide-left">Por ejemplo:</h4>
           <p class="--subcopy js-scroll slide-left">Si recomiendas a 10 amigos y 5 se matriculan en el Máster, recibirás <b>500€ en tarjetas para comprar en Amazon.</b> Tus 5 amigos se ahorrarán la matrícula del Máster.</p>
           <div class="--cta --go_form_down js-scroll slide-left">TRAE UN AMIGO</div>
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
               <div class="--formulario_claim js-scroll slide-left">
                    <h2 class="--title">
                        Trae un amigo <br class="d-md-none d-xl-block">y te regalamos <br class="d-md-none d-xl-block">un <span>cheque de <br class="d-md-none d-xl-block">Amazon de 100€</span>
                        </h2>
                    
               </div>
               <div class="--formulario_form js-scroll slide-right">
                <p class="--form_title">Matrícula GRATIS para tus amigos.</p>
                <p class="--form_extra"><span>Ahorrarán 95€</span></p>
                @include('layouts.form-footer-recomienda')
               </div>
           </div>
        </div>
    </div>
</div>

@endsection