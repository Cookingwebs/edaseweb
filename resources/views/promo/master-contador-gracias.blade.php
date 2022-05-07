@extends('layouts.plantilla-promo')

@section('title', 'Master')

@section('id-page', 'master-contador')

@section('content')
    
<div id="master_contador-page" class="--master_contado-gracias">
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
            <h1 class="--title">Hemos recibido <br><b>con éxito tu solicitud</b></h1>
            <p>Muchas gracias por tu interés. Te llamaremos en las próximas horas para conocer tu perfil, y si cumples los requisitos que estamos buscando para incorporar a nuestra cantera de asesores, te concederemos una de nuestras plazas becadas.</p>
        </div>
    </div>
@endsection