@extends('layouts.plantilla-promo')

@section('title', 'Aula Abierta Gracias')

@section('id-page', 'lanzamiento')

@section('content')
<div id="lanzamiento-page" class="--aula-abierta-gracias">
    <div id="b_cabecera">
        <div class="--copy">
            <h2 class="--title">CUESTIONARIOS</h2>
        </div>
    </div>
    <div class="--aside" id="b_gracias">
        <div class="--copy">
            <p class="--section_title">CUESTIONARIOS</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
          <p class="--link">Cuestionario clase 1</p>  
          <p class="--link">Cuestionario clase 2</p>  
          <p class="--link">Cuestionario clase 3</p>  
          <a class="nav-link" href="{{ route('signout') }}">Logout</a>
        </div>
    </div>

</div>
@endsection