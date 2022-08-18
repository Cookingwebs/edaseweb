@extends('layouts.plantilla-promo')

@section('title', 'Aula Abierta Gracias')

@section('id-page', 'lanzamiento')

@section('content')
<div id="matricula-page" class="--master">
    <div id="b_cabecera">
        <div class="--copy">
            <h2 class="--title">MATRÍCULA MASTER</h2>
        </div>
    </div>
    <div class="--aside" id="b_matricula">
        <div class="--copy">
            <p class="--section_title">MATRÍCULA MASTER</p>
        </div>
        <div class="--section">
        </div>
        <div class="--content">
            <div class="--arrow_interior d-none d-md-block --top">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
                <img src="{{ URL::to('/') }}/images/svg/arrow-down-green.svg" alt="" class="lazyload">
            </div>
            <form class="--matricula" action="{{route('pdf-master')}}" method="post">
                @csrf
                <h2  class="--matricula-title">Datos personales</h2>
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="dni">DNI / NIE:</label>
                    <input type="text" class="form-control" id="dni" placeholder="DNI / NIE" name="dni" value="" required>
                </div>
            
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="sexo">Sexo:</label>
                        <select class="form-control" name="sexo" required>
                            <option value="Hombre">Hombre</option>
                            <option value="Mujer">Mujer</option>
                        </select>
                </div>
            
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="dateN">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="dateN" placeholder="Fecha de nacimiento" name="dateN" value="" required>
                </div>
            
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="apellido1">1º Apellido:</label>
                    <input type="text" class="form-control" id="apellido1" placeholder="Ingrese Apellidos" name="apellido1" value="" required>
                </div>
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="apellido2">2º Apellido:</label>
                    <input type="text" class="form-control" id="apellido2" placeholder="Ingrese Apellidos" name="apellido2" value="" required>
                </div>
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="firstname">Nombres:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Ingrese Nombres" name="firstname" value="" required>
                </div>
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="localidad">Localidad:</label>
                    <input type="text" class="form-control" id="localidad" placeholder="Ingrese Localidad" name="localidad" value="" required>
                </div>
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="provincia">Provincia:</label>
                    <input type="text" class="form-control" id="provincia" placeholder="Ingrese Provincia" name="provincia" value="" required>
                </div>
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="cp">Código postal:</label>
                    <input type="text" class="form-control" id="cp" placeholder="Ingrese Código postal" name="cp" value="" required>
                </div>
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="domicilio">Domicilio:</label>
                    <input type="text" class="form-control" id="domicilio" placeholder="Ingrese Domicilio" name="domicilio" value="" required>
                </div>
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="telefono">Teléfono móvil:</label>
                    <input type="text" class="form-control" id="telefono" placeholder="Ingrese Nombres" name="telefono" value="" required>
                </div>
            
                <div class="--form-group">
                    <label class="control-label col-sm-2" for="mailfrom">Email de contacto:</label>
                    <input type="email" class="form-control" id="mailfrom" placeholder="Ingrese Email De" name="mailfrom" value="" required>
                </div>
            
            
                <h2 class="--matricula-title">Modalidad</h2>
                <div class="--form-group">
                    <div class="form-check">
                    <label class="form-check-label" for="online">Online</label>
                        <input class="form-check-input" type="radio" name="modalidad" id="online" value="Online" checked>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="presencial">Presencial</label>
                        <input class="form-check-input" type="radio" name="modalidad" id="presencial" value="Presencial">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="streaming">Streaming</label>
                        <input class="form-check-input" type="radio" name="modalidad" id="streaming" value="Streaming">
                    </div>
                    </div>
            
                <h2 class="--matricula-title">Método de pago</h2>
                <div class="--form-group">
                <div class="form-check">
                    <label class="form-check-label" for="inlineRadio1">Pago íntegro:</label>
                        <input class="form-check-input" type="radio" name="tipoDePago" id="inlineRadio1" value="Íntegro" checked>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="inlineRadio2">Financiación</label>
                        <input class="form-check-input" type="radio" name="tipoDePago" id="inlineRadio2" value="Financiación">
                    </div>
                    </div>
            
            <div class="financiacion" style="display:none">
            
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="dateI">Mes de inicio:</label>
                            <input type="date" class="form-control" id="dateI" placeholder="Mes de inicio" name="dateI" value="">
                    </div>
            
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="cuota">Cuota elegida:</label>
                            <select class="form-control" name="cuota" id="cuotaTramo">
                                <option value=""></option>
                                <option value="665,80">3 meses</option>
                                <option value="338,30">6 meses</option>
                                <option value="174,55">12 meses</option>
                                <option value="119,96">18 meses</option>
                                <option value="92,67">24 meses</option>
                            </select>
                    </div>
            
                    <h2 class="--matricula-title">Datos financiación</h2>
                    <div class="--form-group">
                    <div class="form-check">
                        <label class="form-check-label" for="inlineRadio1">Utilizar mismos datos del  alumno:</label>
                            <input class="form-check-input" type="radio" name="datosFinanciacion" id="inlineRadio12" value="1" checked>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="inlineRadio2">Otros datos para la financiación:</label>
                            <input class="form-check-input" type="radio" name="datosFinanciacion" id="inlineRadio22" value="2">
                        </div>
                        </div>
                        <div class="datos-financiacion" style="display:none">
                            <div class="--form-group">
                        <label class="control-label col-sm-2" for="dniF">DNI o NIE:</label>
                            <input type="text" class="form-control" id="dniF" placeholder="DNI o NIE" name="dniF" value="">
                    </div>
            
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="sexoF">Sexo:</label>
                            <select class="form-control" name="sexoF">
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                            </select>
                    </div>
            
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="dateNF">Fecha de nacimiento:</label>
                            <input type="date" class="form-control" id="dateNF" placeholder="Fecha de nacimiento" name="dateNF" value="">
                    </div>
            
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="apellido1F">1º Apellido:</label>
                            <input type="text" class="form-control" id="apellido1F" placeholder="Ingrese Apellidos" name="apellido1F" value="">
                    </div>
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="apellido2F">2º Apellido:</label>
                            <input type="text" class="form-control" id="apellido2F" placeholder="Ingrese Apellidos" name="apellido2F" value="">
                    </div>
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="nombreF">Nombres:</label>
                            <input type="text" class="form-control" id="nombreF" placeholder="Ingrese Nombres" name="nombreF" value="">
                    </div>
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="localidadF">Localidad:</label>
                            <input type="text" class="form-control" id="localidadF" placeholder="Ingrese Localidad" name="localidadF" value="">
                    </div>
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="provinciaF">Provincia:</label>
                            <input type="text" class="form-control" id="provinciaF" placeholder="Ingrese Provincia" name="provinciaF" value="">
                    </div>
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="cpF">Código postal:</label>
                            <input type="text" class="form-control" id="cpF" placeholder="Ingrese Código postal" name="cpF" value="">
                    </div>
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="domicilioF">Domicilio:</label>
                            <input type="text" class="form-control" id="domicilioF" placeholder="Ingrese Domicilio" name="domicilioF" value="">
                    </div>
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="telefonoF">Teléfono móvil:</label>
                            <input type="text" class="form-control" id="telefonoF" placeholder="Ingrese Nombres" name="telefonoF" value="">
                    </div>
            
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="mailfromF">Email de contacto:</label>
                            <input type="email" class="form-control" id="mailfromF" placeholder="Ingrese Email De" name="mailfromF" value="">
                    </div>
                    </div>
                    <h4 class="--matricula-title">Número de cuenta</h4>
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="numCuentaFacT">Número de cuenta:</label>
                            <input type="text" class="form-control" id="numCuentaFacT" placeholder="Número de cuenta" name="numCuentaFacT" value="">
                    </div>
                    
                </div>
                    <h4 class="--matricula-title">DATOS FACTURACIÓN</h4>
            
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="dniFacT">DNI:</label>
                            <input type="text" class="form-control" id="dniFacT" placeholder="DNI o NIE" name="dniFacT" value="">
                    </div>
                    <div class="--form-group">
                        <label class="control-label col-sm-2" for="nombreFacT">Nombre completo:</label>
                            <input type="text" class="form-control" id="nombreFacT" placeholder="Nombre completo" name="nombreFacT" value="">
                    </div>
                    <h2 class="--matricula-title">Firma</h2>
                    <div class="bloque-firma">
                    <canvas id="colors_sketch" width="320" height="200" style="border: 1px solid #ccc">
                    </canvas>
                    <div class="--firma-bloque_cta">
                        <input style="margin-right:20px" type="button" class="--cta" value="Borrar"
                        onclick="sketcher.clear();" />
                        <input type="button" id="btnSave" class="--cta" value="Guardar Firma" />
                    </div>
 
                </div>
                    <div class="firmas preview">
                        <div class="">
                                <p class="previewh4" style="display:none">Previsualización de la firma</p>
                        </div>
            
                        <div class="">
                            <img id = "imgCapture" alt = "" style = "display:none;border:1px solid #ccc" />
                            <input type="hidden" name="img" value="" id="imagen1"/>
                        </div>
                    </div>
                    <div class="--matricula-legales">
                        <p>Autorizo a AYUDA T LEARNING S.L.U. para que gestione mis datos de carácter personal en
                        interés de la gestión formativa y académica.</p>
                                <p>El solicitante acepta la <a href="{{route('politica')}}" target="_blank">política de privacidad</a> y <a href="condiciones-venta.php" target="_blank">condiciones de ventas.</a></p>
                          <p>Cedo a AYUDA T LEARNING S.L.U. la totalidad de los derechos que pudieran corresponderle sobre mi voz e imagenes, grabadas o captadas con motivo u ocasión de las webinars en directo con el resto de compañeros que se realiza semanalmente, autorizando solo la utilización de (captación, reproducción y difusión) de las mencionadas imagenes, o de parte de las mismas, dentro del campus virtual del Master Asesor Experto en gestión fiscal, laboral y contabilidad.</p>
                    </div>
                <div class="--form-group">
                    <div>
                        <button type="submit" class="--cta btn-success">Crear y Enviar Ficha de Matrícula</button>
                        <small id="emailHelp" class="form-text text-muted">Asegurese de que los datos son correctos.</small>
                    </div>
                </div>
            </form>
        </div>
    </div>
   
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
      <script src="https://cdn.rawgit.com/mobomo/sketch.js/master/lib/sketch.min.js" type="text/javascript"></script>
  <script src="{{ URL::to('/') }}/assets/lib/modernizr.custom.34982.js"></script>
      <script src="{{ URL::to('/') }}/assets/lib/sketcher.js"></script>
       <script src="{{ URL::to('/') }}/assets/lib/trigonometry.js"></script>
       <script type="text/javascript">
         $(document).ready(function(){
  
           $('#online').change(function() {
                   if($(this).is(":checked")) {
                       $('#cuotaTramo').html(`
                       <option value=""></option>
                      <option value="665,80">3 meses</option>
                      <option value="338,30">6 meses</option>
                      <option value="174,55">12 meses</option>
                      <option value="119,96">18 meses</option>
                      <option value="92,67">24 meses</option>
                       `);
                   }
               });
           $('#presencial').change(function() {
                  if($(this).is(":checked")) {
                       $('#cuotaTramo').html(`
                       <option value=""></option>
                      <option value="1000,80">3 meses</option>
                      <option value="508,80">6 meses</option>
                      <option value="262,80">12 meses</option>
                      <option value="180,80">18 meses</option>
                      <option value="139,80">24 meses</option>
                       `);
                   }
               });
           $('#streaming').change(function() {
                  if($(this).is(":checked")) {
                       $('#cuotaTramo').html(`
                       <option value=""></option>
                      <option value="779,86">3 meses</option>
                      <option value="396,53">6 meses</option>
                      <option value="204,86">12 meses</option>
                      <option value="140,97">18 meses</option>
                      <option value="109,03">24 meses</option>
                       `);
                   }
               });
           $('#inlineRadio2').change(function() {
                   if($(this).is(":checked")) {
                       $('.financiacion').fadeIn();
                   }else{
                     $('.financiacion').fadeOut();
                   }
               });
           $('#inlineRadio1').change(function() {
                   if($(this).is(":checked")) {
                       $('.financiacion').fadeOut();
                   }else{
                     $('.financiacion').fadeIn();
                   }
               });
           $('#inlineRadio22').change(function() {
                   if($(this).is(":checked")) {
                       $('.datos-financiacion').fadeIn();
                   }else{
                     $('.datos-financiacion').fadeOut();
                   }
               });
           $('#inlineRadio12').change(function() {
                   if($(this).is(":checked")) {
                       $('.datos-financiacion').fadeOut();
                   }else{
                     $('.datos-financiacion').fadeIn();
                   }
               });
                      $('.addFirma_m').on('click', function(){
                          $('.bloque-firma').fadeIn();
                          $('body').css('overflow-y', 'hidden');
                      });
                   });
                   </script>
      <script type="text/javascript">
      $(function () {
      sketcher = new Sketcher( "colors_sketch" );
      $("#btnSave").bind("click", function () {
              $('.previewh4').show();
              var base64 = $('#colors_sketch')[0].toDataURL();
              $("#imgCapture").attr("src", base64);
              $("#imgCapture").show();
              $('#imagen1').attr("value", base64);
                  $('body').css('overflow-y', 'initial');
  
      });
  
  
  
      });
      </script>
</div>
@endsection