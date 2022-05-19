@extends('layouts.plantilla-promo', ['chat' => $chat])

@section('title', 'Aula Abierta')

@section('id-page', 'lanzamiento')

@section('content')
<div id="lanzamiento-page" class="--aula-abierta-contable">
    <div id="b_cabecera">
        <div class="--copy">
            <h2 class="--title">EDICIÓN ESPECIAL DE MAYO</h2>
        </div>
    </div>
    
    <div class="--aside" id="b_documentos">
        <div class="--copy">
            <p class="--section_title">PREGUNTAS FRECUENTES</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">PREGUNTAS FRECUENTES</p>
            <div class="ratio ratio-16x9">
                <iframe src="https://player.vimeo.com/video/711566040?h=26253d279b&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="fullscreen; picture-in-picture" allowfullscreen title="GO_Directo_Contabilida.mp4"></iframe><script src="https://player.vimeo.com/api/player.js"></script>
              </div>
        </div>
    </div>

</div>
@endsection
