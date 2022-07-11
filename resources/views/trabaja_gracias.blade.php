@extends('layouts.plantilla')

@section('title', 'Trabaja')

@section('id-page', 'trabaja')

@section('content')
<div id="trabaja-page">
    <div id="b_cabecera">
        <div class="--copy">
            <p class="--title">PLAN DE CARRERA </p>
        </div>
    </div>
    <div class="--aside" id="b_objetivos">
        <div class="--copy">
            <p class="--section_title">TRABAJA</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
           <p class="--title"><u class="slide-left-delay-0 --first-content">GRACIAS POR ENVIAR</u> <br>
            <b>EL CURRICULUM</b></p>
            <p class="--objetivos_boque_copy_text">En caso de ser seleccionado nos pondremos en contacto contigo</p>
        </div>
    </div>
    

</div>
@endsection