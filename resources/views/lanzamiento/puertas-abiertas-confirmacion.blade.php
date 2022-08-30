@extends('layouts.plantilla-promo')

@section('title', 'Aula Abierta Gracias')

@section('id-page', 'lanzamiento')

@section('content')
<div id="lanzamiento-page" class="--aula-abierta-gracias" style="display: none">
    <div id="b_cabecera">
        <div class="--copy">
            <h2 class="--title">GRACIAS!</h2>
        </div>
    </div>
    <div class="--aside" id="b_gracias">
        <div class="--copy">
            <p class="--section_title">GRACIAS</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <h1 class="--title"><b>¡Solicitud recibida!</b></h1>
            <h2 class="--subtitle"><span>+</span> Te pedimos algo de paciencia, tu dinamizadora te llamará para<br class="d-none d-lg-block"> darte el diploma en las próximas horas.</h2>
            <form action="" name="confirmacion" method="post">
                <input type="hidden" name="email" value="{{ $email }}">
                <input type="hidden" name="telefono" value="{{ $phone }}">
                <input type="hidden" name="date" id="__date" value="">
            </form>
        </div>
    </div>

</div>
@endsection