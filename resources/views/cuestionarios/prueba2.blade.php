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
        <h2 class="--b_prueba_frame-pregunta">1. La duración máxima del contrato eventual en situaciones imprevisibles después de la reforma laboral es de:</h2>
        <label for="p1-1">
            <input type="radio" value="a" name="p1" id="p1-1"> De 3 meses, esta regla será ampliable en los convenios colectivos hasta una duración máxima de 6 meses
        </label>
        <label for="p1-2">
            <input type="radio" value="b" name="p1" id="p1-2"> De 6 meses, esta regla será ampliable en los convenios colectivos hasta una duración máxima de 12 meses
        </label>
        <label for="p1-3">
            <input type="radio" value="c" name="p1" id="p1-3"> De 6 meses, esta regla será ampliable en los convenios colectivos hasta una duración máxima de 9 meses
        </label>
        <label for="p1-4">
            <input type="radio" value="d" name="p1" id="p1-4"> De 6 meses sin opción a ampliación
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
    <h2 class="--b_prueba_frame-pregunta">2. La duración máxima del contrato eventual en situaciones previsibles después de la reforma laboral es de:</h2>
    <label for="p2-1">
        <input type="radio" value="a" name="p2" id="p2-1"> 90 días de manera no continuada
    </label>
    <label for="p2-2">
        <input type="radio" value="b" name="p2" id="p2-2"> 90 días de manera continuada
    </label>
    <label for="p2-3">
        <input type="radio" value="c" name="p2" id="p2-3"> 180 días de manera no continuada
    </label>
    <label for="p2-4">
        <input type="radio" value="d" name="p2" id="p2-4"> 180 días de manera continuada
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
    <h2 class="--b_prueba_frame-pregunta">3. Tenemos un trabajador con puesto de camarero cuyo contrato eventual por situaciones imprevisibles inició el 01/07/2022, su contrato le vence el 31/08/2022, este contrato tendría opción a:</h2>
    <label for="p3-1">
        <input type="radio" value="a" name="p3" id="p3-1"> 1 prórroga de 24 meses
    </label>
    <label for="p3-2">
        <input type="radio" value="b" name="p3" id="p3-2"> 1 prórroga de 6 meses si el convenio no amplía la duración máxima, y de 12 meses si el convenio amplia la duración máxima
    </label>
    <label for="p3-3">
        <input type="radio" value="c" name="p3" id="p3-3"> 1 prórroga de 4 meses si el convenio no amplía la duración máxima, y de 10 meses si el convenio amplia la duración máxima
    </label>
    <label for="p3-4">
        <input type="radio" value="d" name="p3" id="p3-4"> 1 prórroga de 12 meses
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
    <h2 class="--b_prueba_frame-pregunta">4. Adquirirá la condición de fija la persona que ocupe un puesto de trabajo que haya estado ocupado con o sin solución de continuidad…</h2>
    <label for="p4-1">
        <input type="radio" value="a" name="p4" id="p4-1"> Durante más de 18 meses en un periodo de 24 meses mediante contratos por circunstancias de la producción
    </label>
    <label for="p4-2">
        <input type="radio" value="b" name="p4" id="p4-2"> Durante más de 12 meses en un periodo de 24 meses mediante contratos por circunstancias de la producción
    </label>
    <label for="p4-3">
        <input type="radio" value="c" name="p4" id="p4-3"> Durante más de 24 meses en un periodo de 36 meses mediante contratos por circunstancias de la producción
    </label>
    <label for="p4-4">
        <input type="radio" value="d" name="p4" id="p4-4"> Durante más de 6 meses en un periodo de 12 meses mediante contratos por circunstancias de la producción
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
    <h2 class="--b_prueba_frame-pregunta">5. Si tuviéramos que realizar un alta de un contrato eventual por circunstancias previsibles a tiempo completo en Seguridad Social a través de Sistema Red anotaremos:</h2>
    <label for="p5-1">
        <input type="radio" value="a" name="p5" id="p5-1"> El código 410, el grupo de cotización 
    </label>
    <label for="p5-2">
        <input type="radio" value="b" name="p5" id="p5-2"> El código 502 y el grupo de cotización
    </label>
    <label for="p5-3">
        <input type="radio" value="c" name="p5" id="p5-3"> El código 402 y el grupo de cotización y el coeficiente de parcialidad
    </label>
    <label for="p5-4">
        <input type="radio" value="d" name="p5" id="p5-4"> El código 402 y el grupo de cotización y el colectivo de trabajadores 968
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
    <h2 class="--b_prueba_frame-pregunta">6. El periodo de prueba para contratos eventuales inferiores a 6 meses será de:</h2>
    <label for="p6-1">
        <input type="radio" value="a" name="p6" id="p6-1"> 1 mes
    </label>
    <label for="p6-2">
        <input type="radio" value="b" name="p6" id="p6-2"> 2 meses
    </label>
    <label for="p6-3">
        <input type="radio" value="c" name="p6" id="p6-3"> 3 meses
    </label>
    <label for="p6-4">
        <input type="radio" value="d" name="p6" id="p6-4"> 6 meses
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
    <h2 class="--b_prueba_frame-pregunta">7. El contrato obra y servicio tras el 30/03/2022:</h2>
    <label for="p7-1">
        <input type="radio" value="a" name="p7" id="p7-1"> Se puede realizar
    </label>
    <label for="p7-2">
        <input type="radio" value="b" name="p7" id="p7-2"> No se puede realizar
    </label>
    <label for="p7-3">
        <input type="radio" value="c" name="p7" id="p7-3"> Se puede realizar con una duración máxima de 6 meses
    </label>
    <label for="p7-4">
        <input type="radio" value="d" name="p7" id="p7-4"> Se puede realizar con una duración máxima de 3 años
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
    <h2 class="--b_prueba_frame-pregunta">8. A 01/07/2022, en el sector de la construcción, si quisiéramos contratar a un obrero para una obra de 3 meses…</h2>
    <label for="p8-1">
        <input type="radio" value="a" name="p8" id="p8-1"> Le haríamos un contrato obra y servicio por 3 meses
    </label>
    <label for="p8-2">
        <input type="radio" value="b" name="p8" id="p8-2"> Le haríamos un contrato eventual por 3 meses
    </label>
    <label for="p8-3">
        <input type="radio" value="c" name="p8" id="p8-3"> Le haríamos un contrato indefinido
    </label>
    <label for="p8-4">
        <input type="radio" value="d" name="p8" id="p8-4"> Le podríamos hacer un contrato eventual u obra y servicio
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
    <h2 class="--b_prueba_frame-pregunta">9. Tenemos un contrato indefinido en el sector de la construcción, y llegado el fin de la obra, ¿Qué opciones tendríamos?:</h2>
    <label for="p9-1">
        <input type="radio" value="a" name="p9" id="p9-1"> Realizar una propuesta de recolocación
    </label>
    <label for="p9-2">
        <input type="radio" value="b" name="p9" id="p9-2"> Extinguir el contrato en caso de no poder colocar al trabajador en otro puesto
    </label>
    <label for="p9-3">
        <input type="radio" value="c" name="p9" id="p9-3"> Ninguna de las opciones es correcta
    </label>
    <label for="p9-4">
        <input type="radio" value="d" name="p9" id="p9-4"> Opciones 1º y la 2º opción son correctas
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
    <h2 class="--b_prueba_frame-pregunta">10. Tenemos un contrato indefinido en el sector de la construcción, y llegado el fin de la obra, le proponemos una recolocación.</h2>
    <label for="p10-1">
        <input type="radio" value="a" name="p10" id="p10-1"> El trabajador puede rechazarla con 15 días de antelación
    </label>
    <label for="p10-2">
        <input type="radio" value="b" name="p10" id="p10-2"> El trabajador puede rechazarla con 7 días de antelación 
    </label>
    <label for="p10-3">
        <input type="radio" value="c" name="p10" id="p10-3"> El trabajador puede rechazarla con 30 días de antelación
    </label>
    <label for="p10-4">
        <input type="radio" value="d" name="p10" id="p10-4"> El trabajador puede rechazarla con 5 días de antelación
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