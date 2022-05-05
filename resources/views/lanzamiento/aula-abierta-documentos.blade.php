@extends('layouts.plantilla-promo', ['chat' => $chat])

@section('title', 'Aula Abierta')

@section('id-page', 'lanzamiento')

@section('content')
<div id="lanzamiento-page" class="--aula-abierta-documentos">
    <div id="b_cabecera">
        <div class="--copy">
            <h2 class="--title">DOCUMENTOS</h2>
        </div>
    </div>
    
    <div class="--aside" id="b_documentos">
        <div class="--copy">
            <p class="--section_title">Documentos</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <p class="--section_title d-xl-none">Documentos</p>
           
            <div class="--bloque_documentos">
                <div class="--bloque_documentos-item">
                    <div class="--bloque_documentos-item-title">
                        <p class="--title"><span>CLASE 01.</span> ¿Qué debe saber un asesor laboral sobre la nueva reforma?</p>
                    </div>
                    <div class="--bloque_documentos-item-content">
                        <div class="--bloque_documentos-item-content-contenido">
                            <p class="--subtitle">CONTENIDO</p>
                            <ul>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/laboral/Reforma_laboral-Cuadro_comparativo.pdf">Reforma laboral - Cuadro comparativo</a></li>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/laboral/Reforma_laboral-Contrato_obra_y_servicio.pdf">Reforma laboral - Contrato obra y servicio</a></li>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/laboral/Reforma_laboral-Contrato_temporal_eventual.pdf">Reforma laboral - Contrato temporal eventual</a></li>
                            </ul>
                        </div>
                        <div class="--bloque_documentos-item-content-tarea">
                            <p class="--subtitle">TAREA</p>
                            <ul>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/laboral/tarea/Tarea_laboral.pdf">Tarea Laboral</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="--bloque_documentos-item">
                    <div class="--bloque_documentos-item-title">
                        <p class="--title"><span>CLASE 02.</span> ¿Cómo contabiliza un asesor contable?</p>
                    </div>
                    <div class="--bloque_documentos-item-content">
                        <div class="--bloque_documentos-item-content-contenido">
                            <p class="--subtitle">CONTENIDO</p>
                            <ul>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/contable/Ingresos_y_gastos.pdf">Ingresos y gastos</a></li>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/contable/Tipos_de_documentos.pdf">Tipos de documentos</a></li>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/contable/Venta_mercaderias_1.pdf">Venta mercaderías 1</a></li>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/contable/Factura_mercaderias_1.pdf">Factura mercaderías 1</a></li>                                 
                            </ul>
                        </div>
                        <div class="--bloque_documentos-item-content-tarea">
                            <p class="--subtitle">TAREA</p>
                            <ul>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/contable/tarea/Tarea_Contable.pdf">Tarea Contable</a></li>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/contable/tarea/Factura_mercaderias_1.pdf">Factura mercaderías 1</a></li>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/contable/tarea/Factura_mercaderias_2.pdf">Factura mercaderías 2</a></li>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/contable/tarea/Venta_mercaderias_1.pdf">Venta mercaderías 1</a></li>
                                <li><a target="_blank" href="{{ URL::to('/') }}/aula-abierta/contable/tarea/Venta_Mercaderias_2.pdf">Venta mercaderías 2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="--bloque_documentos-item">
                    <div class="--bloque_documentos-item-title">
                        <p class="--title"><span>CLASE 03.</span> ¿Cómo declara el IVA un asesor fiscal?</p>
                    </div>
                    <div class="--bloque_documentos-item-content">
                        <div class="--bloque_documentos-item-content-contenido">
                            <p class="--subtitle">CONTENIDO</p>
                            <ul>
                                <li><a href="{{ URL::to('/') }}/aula-abierta/fiscal/Fiscal_IVA_Regimen_general.pdf">Iva - Régimen general</a></li>
                            </ul>
                        </div>
                        <div class="--bloque_documentos-item-content-tarea">
                            <p class="--subtitle">TAREA</p>
                            <ul>
                                <li><a href="{{ URL::to('/') }}/aula-abierta/fiscal/tarea/Tarea_Fiscal.pdf">Tarea Fiscal</a></li>
                                <li><a href="{{ URL::to('/') }}/aula-abierta/fiscal/tarea/Modelo303.pdf">Modelo 303</a></li>
                                <li><a href="{{ URL::to('/') }}/aula-abierta/fiscal/tarea/Facturas.xlsx">Facturas.xlsx</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>

</div>
@endsection