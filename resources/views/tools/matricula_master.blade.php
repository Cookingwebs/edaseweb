<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    <main>
        <h4>Datos personales</h4>
        <p>DNI / NIE: {{$dni}}</p>
        <p>Sexo: {{$sexo}}</p>
        <p>Fecha de nacimiento: {{$dateN}}</p>
        <p>Nombre: {{$name}} {{$apellido1}} {{$apellido2}}</p>
        <p>Localidad: {{$localidad}}</p>
        <p>Provincia: {{$provincia}}</p>
        <p>CP: {{$cp}}</p>
        <p>Domicilio: {{$domicilio}}</p>
        <p>Teléfono: {{$phone}}</p>
        <p>Email: {{$email}}</p>
        <h4>Modalidad</h4>
        <p>{{$modalidad}}</p>
        <h4>Método de pago</h4>
        <p>Tipo de pago: {{$tipoDePago}}</p>
        <p>Fecha: {{$date}}</p>
        <p>Cuotas: {{$tramo}}</p>
        @if($tipoDePago == "Financiación")
        <h4>Datos de Financiación</h4>
        <p>DNI / NIE: {{$dniF}}</p>
        <p>Sexo: {{$sexoF}}</p>
        <p>Fecha de nacimiento: {{$dateNF}}</p>
        <p>Nombre: {{$nombreF}} {{$apellido1F}} {{$apellido2F}}</p>
        <p>Localidad: {{$localidadF}}</p>
        <p>Provincia: {{$provinciaF}}</p>
        <p>CP: {{$cpF}}</p>
        <p>Domicilio: {{$domicilioF}}</p>
        <p>Teléfono: {{$telefonoF}}</p>
        <p>Email: {{$mailfromF}}</p>
        <p>Número de cuenta: </p>
        <p>{{$numCuentaFacT}}</p>
        @endif
        <h4>Datos de facturación</h4>
        <p>DNI: {{$dniFacT}}</p>
        <p>Nombre:  {{$nombreFacT}}</p>
        <h4>Firma</h4>
        <img src="{{$firma}}" alt="">
    </main>
</body>
</html>
