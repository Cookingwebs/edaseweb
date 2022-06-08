<form action="/send-email" method="post" name="recomienda_form_footer" id="recomienda_form_footer">
    @csrf
    <div class="--form_bloque">
        <input type="text" name="name_input" id="name_input" placeholder="Nombre Amigo">
    </div>
    <div class="--form_bloque">
        <input type="text" name="phone_input" id="phone_input" placeholder="Teléfono Amigo*" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
        <span class="--error --alert_cabecera_email">El Teléfono no es correcto</span>
    </div>
    <div class="--form_bloque">
        <input type="text" name="current_name_input" id="current_name_input" placeholder="Tu Nombre">
    </div>
    <div class="--form_bloque">
        <input type="email" name="email_input" id="email_input" placeholder="Tu Email como alumno*">
        <span class="--error --alert_cabecera_email">El email no es correcto</span>
    </div>
    <div class="--form_bloque --aviso_input">
        <p><input type="checkbox" name="aviso_input" id="aviso_input"><span>Acepto los <a href="{{route('terminos')}}" target="_blank">Términos y Condiciones</a>, <a href="{{route('aviso')}}" target="_blank">Aviso legal</a> y la <a href="{{route('politica')}}" target="_blank">Política de privacidad</a>.*</span></p>
        <span class="--error --alert_cabecera_agree">Debes aceptar los términos legales</span>
    </div>
    <div class="--form_bloque --aviso_notificaciones">
        <p><input type="checkbox" name="notificaciones_input" id="notificaciones_input"><span>Deseo recibir información acerca de los servicios de Ayuda T Soluciones Profesionales.</span></p>
    </div>
    <input type="hidden" name="enterprise_input" value="{{ $enterprise }}">
    <button class="--cta_submit">RECOMENDAR AMIGO</button>
    <span class="--success --alert_cabecera_sucess">Su solicitud se ha enviado correctamente</span>
    <span class="--error --alert_cabecera_error">No se ha podido enviar la solicitud</span>
</form>