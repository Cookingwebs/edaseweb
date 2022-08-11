@extends('layouts.plantilla-promo')
@section('content')
<div id="lanzamiento-page" class="--aula-abierta-gracias">
    <div id="b_cabecera">
        <div class="--copy">
            <h2 class="--title">Registro</h2>
        </div>
    </div>
    <div class="--aside" id="b_gracias">
        <div class="--copy">
            <p class="--section_title">Registro</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <form action="{{ route('register.custom') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                required autofocus>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                </div>
                <div class="form-group mb-3">
                <input type="text" placeholder="Email" id="email_address" class="form-control"
                name="email" required autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                </div>
                <div class="form-group mb-3">
                <input type="password" placeholder="Password" id="password" class="form-control"
                name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                </div>
                <div class="form-group mb-3">
                <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember Me</label>
                </div>
                </div>
                <div class="d-grid mx-auto">
                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                <p class="--login"><a href="/puertas-abiertas/login">Ya estoy registrado</a></p>
                </div>
                </form>
        </div>
    </div>

</div>
@endsection