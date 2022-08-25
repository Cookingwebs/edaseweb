@extends('layouts.plantilla-promo', ['chat' => $chat])

@section('title', 'Aula Abierta')

@section('id-page', 'lanzamiento')

@section('content')
<div id="lanzamiento-page" class="--puertas-abiertas-clase">
    <div id="b_cabecera">
        <div class="--copy">
            @if ($clase == '1')
                <h2 class="--title">CLASE 01 - CONTRATOS INDEFINIDOS</h2>
            @elseif ($clase == '2')
                <h2 class="--title">CLASE 02 - CONTRATOS TEMPORALES</h2>
            @elseif ($clase = '3')    
                <h2 class="--title">CLASE 03 - CONTRATOS DE FORMACIÓN Y PRÁCTICAS</h2>
            @endif
        </div>
    </div>
    
    <div class="--aside" id="b_documentos">
        <div class="--copy">
            @if ($clase == '1')
                <p class="--section_title">CLASE 01</p>
            @elseif ($clase == '2')
                <p class="--section_title">CLASE 02</p>
            @elseif ($clase = '3')    
                <p class="--section_title">CLASE 03</p>
            @endif
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            @if ($clase == '1')
                <p class="--section_title d-xl-none">CLASE 01</p>
            @elseif ($clase == '2')
                <p class="--section_title d-xl-none">CLASE 02</p>
            @elseif ($clase = '3')    
                <p class="--section_title d-xl-none">CLASE 03</p>
            @endif
            <div class="ratio ratio-16x9">
                @if ($clase == '1')
                    <iframe src="https://player.vimeo.com/video/743019684?h=2dbf43ea6a&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="fullscreen; picture-in-picture" allowfullscreen title="GO_Directo_Contabilida.mp4"></iframe><script src="https://player.vimeo.com/api/player.js"></script>
                @elseif ($clase == '2')
                    <iframe src="https://player.vimeo.com/video/743022172?h=96839fd058&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="fullscreen; picture-in-picture" allowfullscreen title="GO_Directo_Contabilida.mp4"></iframe><script src="https://player.vimeo.com/api/player.js"></script>
                @elseif ($clase = '3')    
                    <iframe src="https://player.vimeo.com/video/743024135?h=e4f21e29b6&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="fullscreen; picture-in-picture" allowfullscreen title="GO_Directo_Contabilida.mp4"></iframe><script src="https://player.vimeo.com/api/player.js"></script>
                @endif
              </div>
              <p class="--link_documentos"><a href="
                @if ($clase == '1')
                {{ URL::to('/') }}/puertas-abiertas/1_indefinidos.pdf
                @elseif ($clase == '2')
                {{ URL::to('/') }}/puertas-abiertas/2_temporales.pdf
                @elseif ($clase = '3')    
                {{ URL::to('/') }}/puertas-abiertas/3_formativos.pdf
                @endif
                " target="_blank"><span class="--big">></span> <b>Descarga <span class="--under">aquí</span></b> el documento anexo a la clase (PDF)</a></p>
              <div class="--b_cuestionario">
                <h2 class="--b_cuestionario-title">PRUEBA</h2>
                @if ($clase == '1')
                    <p class="--b_cuestionario-link"><span class="--big">></span> Pulsa en el botón para comenzar la prueba sobre contratos indefinidos, al participar entrarás en el sorteo de 1 <b>beca del 100%.</b></p>
                @elseif ($clase == '2')
                    <p class="--b_cuestionario-link"><span class="--big">></span> Pulsa en el botón para comenzar la prueba sobre contratos temporales, al participar entrarás en el sorteo de 1 <b>beca del 100%.</b></p>
                @elseif ($clase = '3')    
                    <p class="--b_cuestionario-link"><span class="--big">></span> Pulsa en el botón para comenzar la prueba sobre contratos de formación y prácticas, al participar entrarás en el sorteo de 1 <b>beca del 100%.</b></p>
                @endif
                <p class="--b_cuestionario-link --b_cuestionario-link--modify"><b><span class="--under">Importante:</span></b> solo contarán tus respuestas en el 1º intento.</p>
                  <div class="--cta">
                    @if ($clase == '1')
                        <a href="{{route('puertas-abiertas-prueba-1')}}@if (!empty($email))?e={{$email}}@if (!empty($phone))&p={{$phone}} @endif @elseif (empty($email) && !empty($phone))?p={{$phone}} @endif" target="_blank" rel="noopener noreferrer">COMENZAR PRUEBA</a>
                    @elseif ($clase == '2')
                        <a href="{{route('puertas-abiertas-prueba-2')}}@if (!empty($email))?e={{$email}}@if (!empty($phone))&p={{$phone}} @endif @elseif (empty($email) && !empty($phone))?p={{$phone}} @endif" target="_blank" rel="noopener noreferrer">COMENZAR PRUEBA</a>
                    @elseif ($clase = '3')    
                        <a href="{{route('puertas-abiertas-prueba-3')}}@if (!empty($email))?e={{$email}}@if (!empty($phone))&p={{$phone}} @endif @elseif (empty($email) && !empty($phone))?p={{$phone}} @endif" target="_blank" rel="noopener noreferrer">COMENZAR PRUEBA</a>
                    @endif
                  </div>
              </div>
        </div>
    </div>

</div>
@endsection