@extends('layouts.plantilla-promo', ['chat' => $chat])

@section('title', 'Encuesta - 9 meses')

@section('id-page', 'encuesta')

@section('content')
<div id="encuesta-page" class="--9_meses">
    <div id="b_cabecera">
        <div class="--copy">
            <h2 class="--title">CUESTIONARIO - 9 MESES</h2>
        </div>
    </div>
    
    <div class="--aside" id="b_cuestionario">
        <div class="--copy">
            <p class="--section_title">CUESTIONARIO</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--b_cuestionario-copy">Nos gustaría conocer tu más sincera opinión después de realizar los 9 meses de contenido de cada área, cómo sabes, hemos puesto mucha ilusión en este proyecto y agradeceremos enormemente tus comentarios, nuestro objetivo era prepararos para la labor del asesor ¿conseguido? <b>¡GRACIAS!</b></p>
            <form action="" name="resultados" method="post" class="--b_encuesta_form">
                <input type="hidden" name="Timestamp" id="__timestamp">
                @if (empty($email))
                <p><b>Dejanos tu correo electrónico para poder saber quien eres</b></p>
                <input type="email" name="" id="email_1" class="--input" placeholder="Email">
                @else
                <input type="hidden" name="Email" id="__email" value="{{$email}}">
                @endif
                <div class="--b_encuesta_form-textarea">
                    <div class="--b_encuesta_form-textarea-item">
                        <h3>ÁREA LABORAL</h3>
                        <textarea name="laboral" id="" placeholder="Déjanos tu opinión..."></textarea>
                    </div>
                    <div class="--b_encuesta_form-textarea-item">
                        <h3>ÁREA CONTABLE</h3>
                        <textarea name="contable" id="" placeholder="Déjanos tu opinión..."></textarea>
                    </div>
                    <div class="--b_encuesta_form-textarea-item">
                        <h3>ÁREA FISCAL</h3>
                        <textarea name="fiscal" id="" placeholder="Déjanos tu opinión..."></textarea>
                    </div>
                </div>
                <div class="--cta" id="__sendEncuesta">
                    Enviar >
                </div>
            </form>
        </div>
    </div>

</div>
@endsection