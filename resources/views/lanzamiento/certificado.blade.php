@extends('layouts.plantilla-promo')

@section('title', 'Aula Abierta Gracias')

@section('id-page', 'lanzamiento')

@section('content')
<div id="matricula-page" class="--master">
    <div id="b_cabecera">
        <div class="--copy">
            <h2 class="--title">CERTIFICADO</h2>
        </div>
    </div>
    <div class="--aside" id="b_matricula">
        <div class="--copy">
            <p class="--section_title">CERTIFICADO</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <form class="--matricula" action="{{route('pdf-certificado')}}" method="post">
                @csrf
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="dni">DNI / NIE:</label>
                    <input type="text" class="form-control" id="dni" placeholder="DNI / NIE" name="dni" value="" required>
                </div>
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="firstname">Nombres:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Ingrese Nombres" name="nombre" value="" required>
                </div>
                <div class="--form-group">
                    <div>
                        <button type="submit" class="--cta btn-success">Crear Certificado</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection