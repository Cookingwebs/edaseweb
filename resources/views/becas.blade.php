@extends('layouts.plantilla')

@section('title', 'Admisión y BECAS')

@section('id-page', 'becas')

@section('content')
<div id="becas-page" class="js-scroll fade-in">
    <div id="b_cabecera">
        <div class="--copy">
            <h1 class="--title">admisión y becas</h1>
        </div>
    </div>
    <div class="--aside" id="b_admisiones">
        <div class="--copy">
            <p class="--section_title">admisiones</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <h2 class="--title">Portal de solicitud<br class="d-none d-md-block">
                de becas <br class="d-md-none"> y admisiones</h2>
            <p class="--subtitle">AL ENVIAR TU AUTOMATRÍCULA, NOS PONDREMOS EN CONTACTO CONTIGO EN MENOS DE 24 HORAS PARA HABLARTE DE NUESTRO PROGRAMA DE BECAS.</p>
            <div class="--admision_bloque_formulario">
                <form method="post" name="admision_form" id="admision_form">
                    <div class="--form_bloque">
                        <input type="text" name="name_input" id="name_input" placeholder="Nombre y apellidos">
                    </div>
                    <div class="--form_bloque">
                        <input type="email" name="email_input" id="email_input" placeholder="Email">
                        <span class="--error --alert_becas_email">El email no es correcto</span>
                    </div>
                    <div class="--form_bloque">
                        <input type="text" name="phone_input" id="phone_input" placeholder="Teléfono*">
                        <span class="--error --alert_becas_phone">El Teléfono no es correcto</span>
                    </div>
                    <div class="--form_bloque --plan_estudios_input">
                        <label for="plan_estudios_input">
                            <b>Selección del Plan de Estudios</b>
                        </label>
                        <select name="plan_estudios_input" id="plan_estudios_input">
                            <option selected disabled value="0">Seleccionar uno</option>
                            <option value="mba">MBA en administración y dirección de empresas, asesorías y despachos profesionales (18 meses)</option>
                            <option value="master">Máster Asesor Experto fiscal, laboral y contable (12 meses)</option>
                            <option value="tecnico_laboral">Especialización Técnica en Asesoría laboral y contable (6 meses)</option>
                            <option value="tecnico_fiscal">Especialización Técnica en Asesoría fiscal y contable (6 meses)</option>
                        </select>
                        <span class="--error --alert_becas_estudios">Debes seleccionar una opción</span>
                    </div>
                    <div class="--form_bloque --formacion_previa_input">
                        <label for="formacion_previa_input">
                            <b>¿Tienes formación previa o experiencia relacionada con la asesoría y la gestión de empresas?</b> ADE, derecho, contabilidad, finanzas, rrhh, relaciones laborales, administración, economía, tributación, etc. <span>[Seleccionar una]</span>
                        </label>
                        <p><input type="radio" name="formacion_previa_input" value="experiencia">Tengo experiencia como asesor fiscal, laboral y/o contable.</p>
                        <p><input type="radio" name="formacion_previa_input" value="estudios universitarios">Tengo estudios universitarios o de posgrado en algún área relacionada con la gestión y la asesoría.</p>
                        <p><input type="radio" name="formacion_previa_input" value="formación profesional">Cuento con formación profesional, de grado medio o superior, relacionada con la gestión.</p>
                        <p><input type="radio" name="formacion_previa_input" value="sin experiencia">No tengo experiencia ni estudios relacionados.</p>
                        <span class="--error --alert_becas_previa">Debes seleccionar una opción</span>
                    </div>
                    <div class="--form_bloque --objetivo_input">
                        <label for="objetivo_input">
                            <b>Tu objetivo <span>[Seleccionar una]</span></b>
                        </label>
                        <p><input type="radio" name="objetivo_input" value="directivo">Quiero prepararme para desarrollar mi carrera como directivo en el sector.</p>
                        <p><input type="radio" name="objetivo_input" value="emprender">Quiero emprender y montar mi propio despacho o asesoría.</p>
                        <p><input type="radio" name="objetivo_input" value="trabajar">Quiero formarme para trabajar como asesor y acceder a la bolsa de empleo.</p>
                        <p><input type="radio" name="objetivo_input" value="reciclar">Quiero reciclar mi perfil profesional y ampliar mis áreas de conocimiento.</p>
                        <span class="--error --alert_becas_objetivo">Debes seleccionar una opción</span>
                    </div>
                    <div class="--form_bloque --aviso_input">
                        <p><input type="checkbox" name="aviso_input" id="aviso_input"><span>Acepto los <a href="{{route('terminos')}}" target="_blank">Términos y Condiciones</a>, <a href="{{route('aviso')}}" target="_blank">Aviso legal</a> y la <a href="{{route('politica')}}" target="_blank">Política de privacidad</a>.*</span></p>
                        <span class="--error --alert_becas_agree">Debes aceptar los términos legales</span>
                    </div>
                    <input type="hidden" name="enterprise_input" value="{{ $enterprise }}">
                    <button class="--cta_submit">Finalizar Automatrícula</button>
                    <span class="--success --alert_becas_sucess">Su solicitud se ha enviado correctamente</span>
                    <span class="--error --alert_becas_error">No se ha podido enviar la solicitud</span>
                </form>
            </div>
        </div>
    </div>
    <div class="--aside" id="b_becas">
        <div class="--copy">
            <p class="--section_title">BECAS</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--2_columns">
                <div class="--becas_bloque_title">
                    <p class="--title">
                        <u class="js-scroll slide-left">Programa de</u> <br>
                        <u class="js-scroll slide-left">BECAS Ayuda</u> <br> 
                        <u class="js-scroll slide-left">T Pymes</u></p>
                </div>
                <div class="--becas_bloque_copy_1">
                       <p class="--text js-scroll slide-right">La Escuela de Asesores es el centro de formación especializado de <b>Ayuda T Pymes,</b> la mayor asesoría de empresas en España. Su Programa de Becas es una apuesta estratégica por el talento, la diversidad y la igualdad de oportunidades en el sector de la asesoría y el despacho profesional.</p>
                       <p class="--text js-scroll slide-right"><b>La herramienta para proyectar la carrera profesional de estudiantes con talento, pero sin los recursos económicos suficientes para acceder a la Escuela de Asesores.</b></p>
                </div>
                <div class="--becas_bloque_img">
                    <img src="{{ URL::to('/') }}/images/becas/becas-admision.webp" alt="" class="lazyload js-scroll slide-left">
                   </div>
            </div>
        </div>
    </div>
    <div class="--aside" id="b_cifras">
        <div class="--copy">
            <p class="--section_title">CIFRAS</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --bottom">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <p class="--title js-scroll fade-in">El Programa de BECAS de<br> Ayuda T Pymes <b>en cifras</b></p>
            <div class="--cifras_tabla">
                <div class="--cifras_tabla_item">
                    <div class="--cifras_tabla_item_datos js-scroll slide-left">
                        <p><span>+</span>100</p>
                    </div>
                    <div class="--cifras_tabla_item_copy js-scroll slide-right">
                        <p>+ de 100 BECAS <br>otorgadas en 2021</p>
                    </div>
                </div>
                <div class="--cifras_tabla_item">
                    <div class="--cifras_tabla_item_datos js-scroll slide-left">
                        <p>70/100<span>%</span></p>
                    </div>
                    <div class="--cifras_tabla_item_copy js-scroll slide-right">
                        <p>Becas del 70 al 100% en los distintos planes formativos de EDASE</p>
                    </div>
                </div>
                <div class="--cifras_tabla_item">
                    <div class="--cifras_tabla_item_datos js-scroll slide-left">
                        <p>1,2 <span>M</span></p>
                    </div>
                    <div class="--cifras_tabla_item_copy js-scroll slide-right">
                        <p>1’2 millones de euros otorgados desde 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script>

    </script>
</div>
@endsection