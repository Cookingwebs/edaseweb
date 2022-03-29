@extends('layouts.plantilla')

@section('title', 'Admisión y BECAS')

@section('id-page', 'becas')

@section('content')
<div id="becas-page">
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
            <h2 class="--title">Bienvenid@ al portal<br>
                de admisiones de <b>EDASE</b></h2>
            <p class="--subtitle">ENVÍA TU AUTOMATRÍCULA Y UN DINAMIZADOR FORMATIVO SE PONDRÁ EN CONTACTO CONTIGO <b>EN MENOS DE 24 HORAS.</b></p>
            <div class="--admision_bloque_formulario">
                <form action="" method="post" name="admision_form" id="admision_form">
                    <div class="--form_bloque">
                        <input type="text" name="name_input" id="name_input" placeholder="Nombre y apellidos">
                    </div>
                    <div class="--form_bloque">
                        <input type="email" name="email_input" id="email_input" placeholder="Email">
                    </div>
                    <div class="--form_bloque">
                        <input type="text" name="phone_input" id="phone_input" placeholder="Teléfono">
                    </div>
                    <div class="--form_bloque --plan_estudios_input">
                        <label for="plan_estudios_input">
                            <b>Selección del Plan de Estudios</b>
                        </label>
                        <select name="plan_estudios_input" id="plan_estudios_input">
                            <option selected disabled value="0">Seleccionar uno</option>
                            <option value="mba">MBA en administración y dirección de empresas, asesorías y despachos profesionales (18 meses)</option>
                            <option value="master">Máster Asesor Experto fiscal, laboral y contable (12 meses)</option>
                            <option value="tecnico_laboral">Especialización Técnica en Asesoría laboral y contable (8 meses)</option>
                            <option value="tecnico_fiscal">Especialización Técnica en Asesoría fiscal y contable (8 meses)</option>
                        </select>
                    </div>
                    <div class="--form_bloque --formacion_previa_input">
                        <label for="formacion_previa_input">
                            <b>¿Tienes formación previa o experiencia relacionada con la asesoría y la gestión de empresas?</b> ADE, derecho, contabilidad, finanzas, rrhh, relaciones laborales, administración, economía, tributación, etc. <span>[Seleccionar una]</span>
                        </label>
                        <p><input type="radio" name="formacion_previa_input">Tengo experiencia como asesor fiscal, laboral y/o contable.</p>
                        <p><input type="radio" name="formacion_previa_input">Tengo estudios universitarios o de posgrado en algún área relacionada con la gestión y la asesoría.</p>
                        <p><input type="radio" name="formacion_previa_input">Cuento con formación profesional, de grado medio o superior, relacionada con la gestión.</p>
                        <p><input type="radio" name="formacion_previa_input">No tengo experiencia ni estudios relacionados.</p>
                    </div>
                    <div class="--form_bloque --objetivo_input">
                        <label for="objetivo_input">
                            <b>Tu objetivo <span>[Seleccionar una]</span></b>
                        </label>
                        <p><input type="radio" name="objetivo_input">Quiero prepararme para desarrollar mi carrera como directivo en el sector.</p>
                        <p><input type="radio" name="objetivo_input">Quiero emprender y montar mi propio despacho o asesoría.</p>
                        <p><input type="radio" name="objetivo_input">Quiero formarme para trabajar como asesor y acceder a la bolsa de empleo.</p>
                        <p><input type="radio" name="objetivo_input">Quiero reciclar mi perfil profesional y ampliar mis áreas de conocimiento.</p>
                    </div>
                    <div class="--form_bloque --aviso_input">
                        <p><input type="checkbox" name="aviso_input" id="aviso_input"> Acepto Términos y condiciones, Protección de Datos y la Política de privacidad.</p>
                    </div>
                    <div class="--cta_submit">Finalizar Automatrícula</div>
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
                    <p class="--title">Programa de<br> BECAS Ayuda<br> T Pymes</p>
                </div>
                <div class="--becas_bloque_copy_1">
                       <p class="--text">La Escuela de Asesores es el centro de formación especializado de <b>Ayuda T Pymes,</b> la mayor asesoría de empresas en España. Su Programa de Becas es una apuesta estratégica por el talento, la diversidad y la igualdad de oportunidades en el sector de la asesoría y el despacho profesional.</p>
                       <p class="--text"><b>La herramienta para proyectar la carrera profesional de estudiantes con talento, pero sin los recursos económicos suficientes para acceder a la Escuela de Asesores.</b></p>
                </div>
                <div class="--becas_bloque_img">
                    <img src="{{ URL::to('/') }}/images/metodologia/foto-metodologia.jpg" alt="">
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
            <p class="--title">El Programa de BECAS de<br> Ayuda T Pymes <b>en cifras</b></p>
            <div class="--cifras_tabla">
                <div class="--cifras_tabla_item">
                    <div class="--cifras_tabla_item_datos">
                        <p><span>+</span>100</p>
                    </div>
                    <div class="--cifras_tabla_item_copy">
                        <p>+ de 100 BECAS <br>otorgadas en 2021</p>
                    </div>
                </div>
                <div class="--cifras_tabla_item">
                    <div class="--cifras_tabla_item_datos">
                        <p>70/100<span>%</span></p>
                    </div>
                    <div class="--cifras_tabla_item_copy">
                        <p>Becas del 70 al 100% en los distintos planes formativos de EDASE</p>
                    </div>
                </div>
                <div class="--cifras_tabla_item">
                    <div class="--cifras_tabla_item_datos">
                        <p>1,2 <span>M</span></p>
                    </div>
                    <div class="--cifras_tabla_item_copy">
                        <p>1’2 millones de euros invertidos desde 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script>

    </script>
</div>
@endsection