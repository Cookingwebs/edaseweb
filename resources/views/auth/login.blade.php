@extends('layouts.plantilla-promo')
 
@section('content')
<div id="lanzamiento-page" class="--aula-abierta-gracias">
    <div id="b_cabecera">
        <div class="--copy">
            <h2 class="--title">Iniciar Sesión</h2>
        </div>
    </div>
    <div class="--aside" id="b_gracias">
        <div class="--copy">
            <p class="--section_title">Iniciar Sesión</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <form method="POST" action="{{ route('login.custom') }}">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                        autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="form-group mb-3">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>

                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
                </div>
                <p class="--register"><a href="/puertas-abiertas/registration">No estoy registrado todavía</a></p>
            </form>
        </div>
    </div>

</div>
@endsection