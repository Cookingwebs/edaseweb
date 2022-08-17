@if (empty($email) && empty($phone)) 
    <div class="--b_prueba_frame" data-frame="0" data-show="1"> 
@else 
    <div class="--b_prueba_frame opacity" data-frame="0" data-show="0"> 
@endif
    <div class="--b_prueba_frame-question --b_prueba_frame-question--frame0">
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
        <h2 class="--b_prueba_frame-pregunta">1. El contrato de formación en alternancia se usa para:</h2>
        <div class="--group_input">
            <input type="radio" value="a" name="p1" id="p1-1"> 
            <label for="p1-1">
                Personas que tengan titulación y quieran llevarlo a la práctica
            </label>
        </div>
        <div class="--group_input">
            <input type="radio" value="b" name="p1" id="p1-2">
            <label for="p1-2">
                    Personas que ya hayan trabajado en este puesto de trabajo, pero sin cualificación
                </label>
        </div>
        <div class="--group_input">
            <input type="radio" value="c" name="p1" id="p1-3">
            <label for="p1-3">
                    Personas que no tengan la formación necesaria
                </label>
        </div>
        <div class="--group_input">
            <input type="radio" value="d" name="p1" id="p1-4">
            <label for="p1-4">
                    Personas que tengan titulación de hace más de 10 años
                </label>
        </div>
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
    <h2 class="--b_prueba_frame-pregunta">2. La duración del contrato de formación en alternancia es de:</h2>
    <div class="--group_input">
        <input type="radio" value="a" name="p2" id="p2-1">
        <label for="p2-1">
            Mínima 3 meses y máxima 2 años
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="b" name="p2" id="p2-2">
        <label for="p2-2">
            Mínima 4 meses y máxima 2 años
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="c" name="p2" id="p2-3">
        <label for="p2-3">
            Mínima 6 meses y máxima 2 años
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="d" name="p2" id="p2-4">
        <label for="p2-4">
            No hay mínimo ni máximo, el tiempo que dure la formación.
        </label>
        </div>
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
    <h2 class="--b_prueba_frame-pregunta">3. Respecto al salario en los contratos de formación en alternancia: </h2>
    <div class="--group_input">
        <input type="radio" value="a" name="p3" id="p3-1">
        <label for="p3-1">
            No podrá ser inferior al 60% el primer año ni al 75% respecto de la fijada en convenio para el grupo profesional y nivel retributivo correspondiente a las funciones desempeñadas
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="b" name="p3" id="p3-2">
        <label for="p3-2">
            No podrá ser inferior al 50% el primer año ni al 65% respecto de la fijada en convenio para el grupo profesional y nivel retributivo correspondiente a las funciones desempeñadas 
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="c" name="p3" id="p3-3">
        <label for="p3-3">
            No podrá ser inferior al salario mínimo interprofesional en proporción al tiempo de trabajo efectivo 
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="d" name="p3" id="p3-4">
        <label for="p3-4">
            No tiene ningún tipo de beneficio, será el salario según convenio
        </label>
        </div>
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
    <h2 class="--b_prueba_frame-pregunta">4. El código del contrato de formación en alternancia a tiempo completo es:</h2>
    <div class="--group_input">
        <input type="radio" value="a" name="p4" id="p4-1">
        <label for="p4-1">
            521
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="b" name="p4" id="p4-2">
        <label for="p4-2">
            501
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="c" name="p4" id="p4-3">
        <label for="p4-3">
            421
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="d" name="p4" id="p4-4">
        <label for="p4-4">
            150
        </label>
        </div>
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
    <h2 class="--b_prueba_frame-pregunta">5. El contrato formativo para la obtención de la práctica profesional se realiza para:</h2>
    <div class="--group_input">
        <input type="radio" value="a" name="p5" id="p5-1">
        <label for="p5-1">
            Personas sin formación en esa materia 
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="b" name="p5" id="p5-2">
        <label for="p5-2">
            Poner en práctica la formación que se está cursando
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="c" name="p5" id="p5-3">
        <label for="p5-3">
            Poner en práctica la formación ya realizada 
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="d" name="p5" id="p5-4">
        <label for="p5-4">
            Personas que tengan titulación de más de 10 años
        </label>
        </div>
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
    <h2 class="--b_prueba_frame-pregunta">6. La duración del contrato formativo para la obtención de la práctica profesional es de:</h2>
    <div class="--group_input">
        <input type="radio" value="a" name="p6" id="p6-1">
        <label for="p6-1">
            Mínimo 6 meses y máximo 1 año 
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="b" name="p6" id="p6-2">
        <label for="p6-2">
            Mínimo 8 meses y máximo 1 año 
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="c" name="p6" id="p6-3">
        <label for="p6-3">
            Mínimo 1 años y máximo 3 años 
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="d" name="p6" id="p6-4">
        <label for="p6-4">
            Mínimo 1 años y máximo 2 años 
        </label>
        </div>
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
    <h2 class="--b_prueba_frame-pregunta">7. Una persona que tiene la carrera de Derecho y la empresa quiere hacerle un contrato como abogado con algún beneficio, si cumpliera los requisitos, ¿Qué contrato podríamos hacerle?</h2>
    <div class="--group_input">
        <input type="radio" value="a" name="p7" id="p7-1">
        <label for="p7-1">
            Un contrato eventual de situación previsible
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="b" name="p7" id="p7-2">
        <label for="p7-2">
            Un contrato eventual de situación imprevisible
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="c" name="p7" id="p7-3">
        <label for="p7-3">
            Un contrato de formación en alternancia
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="d" name="p7" id="p7-4">
        <label for="p7-4">
            Un contrato para la obtención de la práctica profesional
        </label>
        </div>
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
    <h2 class="--b_prueba_frame-pregunta">8. Tengo un trabajador con contrato de formación en alternancia, llegado a su duración estipulada en el contrato:</h2>
    <div class="--group_input">
        <input type="radio" value="a" name="p8" id="p8-1">
        <label for="p8-1">
            Este tipo de contrato no admite prórroga 
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="b" name="p8" id="p8-2">
        <label for="p8-2">
            Podrá realizarse una prórroga siempre que no hubiera llegado a la duración máxima y no hubiera obtenido la titulación
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="c" name="p8" id="p8-3">
        <label for="p8-3">
            Podrá aumentar la duración hasta un máximo de 5 años
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="d" name="p8" id="p8-4">
        <label for="p8-4">
            Ninguna de las opciones es correcta
        </label>
        </div>
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
    <h2 class="--b_prueba_frame-pregunta">9. Tengo un trabajador con contrato para la obtención de la práctica profesional, llegado a su duración estipulada en el contrato:</h2>
    <div class="--group_input">
        <input type="radio" value="a" name="p9" id="p9-1">
        <label for="p9-1">
            Tendrá derecho a percibir indemnización de 12 días por año trabajado
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="b" name="p9" id="p9-2">
        <label for="p9-2">
            Tendrá derecho a percibir indemnización de 20 días por año trabajado
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="c" name="p9" id="p9-3">
        <label for="p9-3">
            Si la finalización del contrato es definitiva, según el artículo 49.1.c del estatuto de los trabajadores, el trabajador no tendrá derecho a recibir ninguna indemnización 
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="d" name="p9" id="p9-4">
        <label for="p9-4">
            Se podrá ampliar hasta 3 años su duración máxima
        </label>
        </div>
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
    <h2 class="--b_prueba_frame-pregunta">10. Tengo un trabajador con contrato para la obtención de la práctica profesional, y el cliente me pregunta cuál debe ser su periodo de prueba:</h2>
    <div class="--group_input">
        <input type="radio" value="a" name="p10" id="p10-1">
        <label for="p10-1">
            No podrá exceder de 1 mes salvo lo dispuesto en el convenio colectivo
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="b" name="p10" id="p10-2">
        <label for="p10-2">
            No existe periodo de prueba en este contrato
        </label>
        </div>
    <div class="--group_input">
        <input type="radio" value="c" name="p10" id="p10-3">
        <label for="p10-3">
            No podrá exceder de 3 mes salvo lo dispuesto en el convenio colectivo
        </label>
        </div>
        <div class="--group_input">
        <input type="radio" value="d" name="p10" id="p10-4">
        <label for="p10-4">
             No podrá exceder de 6 mes salvo lo dispuesto en el convenio colectivo
        </label>
        </div>
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
    <div class="--b_prueba_frame-question --b_prueba_frame-question--frame0">
        <h3 class="--b_prueba_frame-title" id="__confetti">¡Prueba completada!</h3>
        <p class="--b_prueba_frame-copy">Tendremos en cuenta tus resultados para la asignación final de <b>becas del 50, 70, 90 y hasta del 100%.</b></p>
    </div>
</div>