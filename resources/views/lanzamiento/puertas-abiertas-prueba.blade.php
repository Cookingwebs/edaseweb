@extends('layouts.plantilla-promo')

@section('title', 'Aula Abierta Prueba')

@section('id-page', 'lanzamiento')

@section('content')
<div id="lanzamiento-page" class="--aula-abierta-prueba" data="{{$prueba}}">
    <div class="--aside" id="b_gracias">
        <div class="--copy">
            <p class="--section_title">PRUEBA 0{{$prueba}}</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <div class="--b_prueba_wrapper">
                @if ($prueba == '1')
                    @include('cuestionarios.prueba1', ['email' => $email, 'phone' => $phone])
                @elseif ($prueba == '2')
                    @include('cuestionarios.prueba2', ['email' => $email, 'phone' => $phone])
                @elseif ($prueba = '3')    
                    @include('cuestionarios.prueba3', ['email' => $email, 'phone' => $phone])
                @endif
                <p class="--state"><span class="--state-current">0</span>/10</p>
                <div class="--process" data="0"></div>
            </div>
        </div>
    </div>

</div>
@endsection