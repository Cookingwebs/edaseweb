@if (empty($email) && empty($phone)) 
    <div class="--b_prueba_frame" data-frame="0" data-show="1"> 
@else 
    <div class="--b_prueba_frame opacity" data-frame="0" data-show="0"> 
@endif
    <div class="--b_prueba_frame-question">
        <h2 class="--b_prueba_frame-pregunta">Introduce tu correo electrónico y teléfono. <br>Recuerda que tiene que ser el mismo con el que reservaste la plaza.</h2>
            <input type="email" name="" id="email_1" class="--input" placeholder="Email">
            <input type="tel" name="" id="phone_1" class="--input" placeholder="Teléfono*" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="9">
            <p class="--error">El teléfono es obligatorio</p>
    </div>
    <div class="--b_cta">
        <div></div>
        <div class="--cta --next" data="0">
            Comenzar >
        </div>
    </div>
</div>
@if (!empty($email) && !empty($phone)) 
    <div class="--b_prueba_frame" data-frame="1" data-show="1">
@else 
    <div class="--b_prueba_frame opacity" data-frame="1" data-show="0">
@endif
    <div class="--b_prueba_frame-question">
        <h2 class="--b_prueba_frame-pregunta">1. El código de contrato para el contrato indefinido a tiempo parcial es:</h2>
        <label for="p1-1">
            <input type="radio" value="a" name="p1" id="p1-1"> 501
        </label>
        <label for="p1-2">
            <input type="radio" value="b" name="p1" id="p1-2"> 100
        </label>
        <label for="p1-3">
            <input type="radio" value="c" name="p1" id="p1-3"> 200
        </label>
        <label for="p1-4">
            <input type="radio" value="d" name="p1" id="p1-4"> 420
        </label>
    </div>
    <div class="--b_cta">
        @if (empty($email) && empty($phone)) 
        <div class="--cta --prev" data="1">
            < Anterior
        </div>
        @else
        <div></div>
        @endif
        <div class="--cta --next" data="1">
            Siguiente >
        </div>
    </div>
</div>
<div class="--b_prueba_frame opacity" data-frame="2" data-show="0">
    <div class="--b_prueba_frame-question">
    <h2 class="--b_prueba_frame-pregunta">2. Si el convenio no indicara otra cosa, el periodo de prueba para un programador (tiene titulación) es de:</h2>
    <label for="p2-1">
        <input type="radio" value="a" name="p2" id="p2-1"> 1 mes
    </label>
    <label for="p2-2">
        <input type="radio" value="b" name="p2" id="p2-2"> 6 meses
    </label>
    <label for="p2-3">
        <input type="radio" value="c" name="p2" id="p2-3"> 2 meses
    </label>
    <label for="p2-4">
        <input type="radio" value="d" name="p2" id="p2-4"> 1 año
    </label>
    </div>
   <div class="--b_cta">
        <div class="--cta --prev" data="2">
            < Anterior
        </div>
        <div class="--cta --next" data="2">
            Siguiente >
        </div>
    </div>
</div>
<div class="--b_prueba_frame opacity" data-frame="3" data-show="0">
    <div class="--b_prueba_frame-question">
    <h2 class="--b_prueba_frame-pregunta">3. Si el contrato fuese indefinido a tiempo parcial, al tramitarlo en la Seguridad Social a través de Sistema RED, debemos rellenar:</h2>
    <label for="p3-1">
        <input type="radio" value="a" name="p3" id="p3-1"> El código de contrato
    </label>
    <label for="p3-2">
        <input type="radio" value="b" name="p3" id="p3-2"> El código de contrato y el grupo de cotización
    </label>
    <label for="p3-3">
        <input type="radio" value="c" name="p3" id="p3-3"> El grupo de cotización
    </label>
    <label for="p3-4">
        <input type="radio" value="d" name="p3" id="p3-4"> El código de contrato, el grupo de cotización y el coeficiente de parcialidad
    </label>
    </div>
   <div class="--b_cta">
        <div class="--cta --prev" data="3">
            < Anterior
        </div>
        <div class="--cta --next" data="3">
            Siguiente >
        </div>
    </div>
</div>
<div class="--b_prueba_frame opacity" data-frame="4" data-show="0">
    <div class="--b_prueba_frame-question">
    <h2 class="--b_prueba_frame-pregunta">4. Un empresario va a abrir una tienda de ropa y va a necesitar a un dependiente, solo con esta información:</h2>
    <label for="p4-1">
        <input type="radio" value="a" name="p4" id="p4-1"> Podrá hacer un contrato temporal
    </label>
    <label for="p4-2">
        <input type="radio" value="b" name="p4" id="p4-2"> Podrá hacer un contrato indefinido
    </label>
    <label for="p4-3">
        <input type="radio" value="c" name="p4" id="p4-3"> Podrá hacer un contrato temporal o indefinido o fijo discontinuo
    </label>
    <label for="p4-4">
        <input type="radio" value="d" name="p4" id="p4-4"> Podrá hacer un contrato fijo discontinuo
    </label>
    </div>
   <div class="--b_cta">
        <div class="--cta --prev" data="4">
            < Anterior
        </div>
        <div class="--cta --next" data="4">
            Siguiente >
        </div>
    </div>
</div>
<div class="--b_prueba_frame opacity" data-frame="5" data-show="0">
    <div class="--b_prueba_frame-question">
    <h2 class="--b_prueba_frame-pregunta">5. Un trabajador ha pasado a cobrar menos de lo que inicialmente indicaba su contrato indefinido por decisión unilateral del empresario, ¿ante que finalización del contrato nos encontramos?</h2>
    <label for="p5-1">
        <input type="radio" value="a" name="p5" id="p5-1"> Extinción por modificaciones sustanciales de condiciones de trabajo
    </label>
    <label for="p5-2">
        <input type="radio" value="b" name="p5" id="p5-2"> Dimisión del trabajador
    </label>
    <label for="p5-3">
        <input type="radio" value="c" name="p5" id="p5-3"> Despido objetivo
    </label>
    <label for="p5-4">
        <input type="radio" value="d" name="p5" id="p5-4"> Despido disciplinario
    </label>
    </div>
   <div class="--b_cta">
        <div class="--cta --prev" data="5">
            < Anterior
        </div>
        <div class="--cta --next" data="5">
            Siguiente >
        </div>
    </div>
</div>
<div class="--b_prueba_frame opacity" data-frame="6" data-show="0">
    <div class="--b_prueba_frame-question">
    <h2 class="--b_prueba_frame-pregunta">6. El contrato fijo discontinuo se presume:</h2>
    <label for="p6-1">
        <input type="radio" value="a" name="p6" id="p6-1"> Por duración determinada
    </label>
    <label for="p6-2">
        <input type="radio" value="b" name="p6" id="p6-2"> Por duración determinada y como máximo 6 meses
    </label>
    <label for="p6-3">
        <input type="radio" value="c" name="p6" id="p6-3"> Por tiempo indefinido
    </label>
    <label for="p6-4">
        <input type="radio" value="d" name="p6" id="p6-4"> Por duración determinada y como máximo 1 año
    </label>
    </div>
   <div class="--b_cta">
        <div class="--cta --prev" data="6">
            < Anterior
        </div>
        <div class="--cta --next" data="6">
            Siguiente >
        </div>
    </div>
</div>
<div class="--b_prueba_frame opacity" data-frame="7" data-show="0">
    <div class="--b_prueba_frame-question">
    <h2 class="--b_prueba_frame-pregunta">7. El contrato fijo discontinuo puede ampliarse mediante una prórroga:</h2>
    <label for="p7-1">
        <input type="radio" value="a" name="p7" id="p7-1"> Incorrecto, en el contrato fijo discontinuo no existe posibilidad de prórroga
    </label>
    <label for="p7-2">
        <input type="radio" value="b" name="p7" id="p7-2"> De máximo 3 meses
    </label>
    <label for="p7-3">
        <input type="radio" value="c" name="p7" id="p7-3"> De máxima 6 meses
    </label>
    <label for="p7-4">
        <input type="radio" value="d" name="p7" id="p7-4"> De máximo 1 año
    </label>
    </div>
   <div class="--b_cta">
        <div class="--cta --prev" data="7">
            < Anterior
        </div>
        <div class="--cta --next" data="7">
            Siguiente >
        </div>
    </div>
</div>
<div class="--b_prueba_frame opacity" data-frame="8" data-show="0">
    <div class="--b_prueba_frame-question">
    <h2 class="--b_prueba_frame-pregunta">8. El objeto del contrato fijo discontinuo es:</h2>
    <label for="p8-1">
        <input type="radio" value="a" name="p8" id="p8-1"> Para realizar los trabajos de naturaleza estacional o vinculados a actividades productivas de temporada
    </label>
    <label for="p8-2">
        <input type="radio" value="b" name="p8" id="p8-2"> Para el desarrollo de aquellos que no tengan dicha naturaleza pero que, siendo de prestación intermitente, tengan periodos de ejecución ciertos, determinados
    </label>
    <label for="p8-3">
        <input type="radio" value="c" name="p8" id="p8-3"> Para el desarrollo de aquellos que no tengan dicha naturaleza pero que, siendo de prestación intermitente, tengan periodos de ejecución ciertos, indeterminados
    </label>
    <label for="p8-4">
        <input type="radio" value="d" name="p8" id="p8-4"> Todas son correctas
    </label>
    </div>
   <div class="--b_cta">
        <div class="--cta --prev" data="8">
            < Anterior
        </div>
        <div class="--cta --next" data="8">
            Siguiente >
        </div>
    </div>
</div>
<div class="--b_prueba_frame opacity" data-frame="9" data-show="0">
    <div class="--b_prueba_frame-question">
    <h2 class="--b_prueba_frame-pregunta">9. Un cliente agricultor nos indica que quiere contratar a un empleado para la recogida de uvas, ¿Qué contrato le aconsejarías?</h2>
    <label for="p9-1">
        <input type="radio" value="a" name="p9" id="p9-1"> Un contrato indefinido ya que lo necesitaré siempre cada vez que haya recolecta
    </label>
    <label for="p9-2">
        <input type="radio" value="b" name="p9" id="p9-2"> Un contrato fijo discontinuo ya que es de naturaleza estacional
    </label>
    <label for="p9-3">
        <input type="radio" value="c" name="p9" id="p9-3"> Un contrato temporal solo para el tiempo de recolección
    </label>
    <label for="p9-4">
        <input type="radio" value="d" name="p9" id="p9-4"> Ninguna de los contratos anteriores
    </label>
    </div>
   <div class="--b_cta">
        <div class="--cta --prev" data="9">
            < Anterior
        </div>
        <div class="--cta --next" data="9">
            Siguiente >
        </div>
    </div>
</div>
<div class="--b_prueba_frame opacity" data-frame="10" data-show="0">
    <div class="--b_prueba_frame-question">
    <h2 class="--b_prueba_frame-pregunta">10. Trabajador con contrato fijo discontinuo que está de baja laboral, en caso de que exista llamamiento:</h2>
    <label for="p10-1">
        <input type="radio" value="a" name="p10" id="p10-1"> La empresa no le hará llamamiento porque está de baja
    </label>
    <label for="p10-2">
        <input type="radio" value="b" name="p10" id="p10-2"> Finalizará la relación laboral
    </label>
    <label for="p10-3">
        <input type="radio" value="c" name="p10" id="p10-3"> La empresa está obligada a realizar el llamamiento
    </label>
    <label for="p10-4">
        <input type="radio" value="d" name="p10" id="p10-4"> Ninguna es correcta
    </label>
    </div>
   <div class="--b_cta">
        <div class="--cta --prev" data="10">
            < Anterior
        </div>
        <div class="--cta" id="__sendQuiz" data="10">
            Finalizar >
        </div>
    </div>
</div>
<form action="" name="resultados" method="post" class="d-none">
    <input type="hidden" name="Timestamp" id="__timestamp">
    <input type="hidden" name="Nota" id="__nota">
    @if (empty($email) && empty($phone)) 
        <input type="hidden" name="Email" id="__email">
        <input type="hidden" name="Teléfono" id="__phone">
    @else 
        <input type="hidden" name="Email" id="__email" value="{{$email}}">
        <input type="hidden" name="Teléfono" id="__phone" value="{{$phone}}">
    @endif
</form>
<div class="--b_prueba_frame opacity" data-frame="11" data-show="0">
    <div class="--b_prueba_frame-question">
        <h3 class="--b_prueba_frame-title">¡Prueba completada!</h3>
        <p class="--b_prueba_frame-copy">Tendremos en cuenta tus resultados para la asignación final de <b>becas del 50, 70, 90 y hasta del 100%.</b></p>
    </div>
</div>