@extends('layouts.plantilla-promo')

@section('title', 'Aula Abierta Gracias')

@section('id-page', 'lanzamiento')

@section('content')
<div id="lanzamiento-page" class="--aula-abierta-gracias">
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
            <h1 class="--title">¡Ya tienes tu <br><b>plaza reservada!</b></h1>
            <h2 class="--subtitle"><span>+</span> RECIBIRÁS LA CONFIRMACIÓN POR EMAIL.</h2>
        </div>
    </div>
    <div class="--aside" id="b_pasos">
        <div class="--copy">
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <h2 class="--title">¿Qué tienes que hacer ahora?</h2>
            <div class="--3_columns">
                <div class="--pasos_copy">
                    <h3 class="--pasos_title">01. ENTRA EN NUESTRO GRUPO PRIVADO DE FACEBOOK Y PRESÉNTATE.</h3>
                    <p>Cuéntanos más sobre tu perfil: qué has estudiado, en qué has trabajado o trabajas actualmente…</p>
                </div>
                <div class="--pasos_copy">
                    <h3 class="--pasos_title">02. APUNTA LAS FECHAS EN TU CALENDARIO.</h3>
                    <p><b>29, 30, 31</b> de agosto, <br><b>1, 2, 5 y 6</b> de septiembre.</p>
                </div>
                <div class="--pasos_copy">
                    <h3 class="--pasos_title">03. NO PIERDAS DE VISTA TU EMAIL.</h3>
                    <p>Te enviaremos toda la información por correo.</p>
                </div>
            </div>
            <div class="--cta">
                <a href="https://www.facebook.com/groups/escueladeasesores" target="_blank">> FACEBOOK</a>
            </div>
        </div>
    </div>
    <div class="--aside" id="b_revisa">
        <div class="--copy">
            <p class="--section_title">REVISA</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --bottom">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <h2 class="--title">¿Has revisado la bandeja de entrada<br> y <span>no encuentras nuestro email?</span></h2>
            <p class="--subtitle">Puede que tarde unos segundos en llegar. Si pasados unos<br> minutos sigues sin verlo, prueba a hacer esto:</p>
            <ul>
                <li>Busca en tu carpeta de spam (A veces nuestro correo llega ahí por error)</li>
                <li>Si usas Gmail, mira también la pestaña de Promociones.</li>
                <li>Si aun así no recibes nada, escríbenos a <a href="mailto:info@edase.es">info@edase.es</a></li>
            </ul>
        </div>
    </div>

</div>
@endsection