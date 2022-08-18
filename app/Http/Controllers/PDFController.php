<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
 
use PDF;
   
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];
           
        $pdf = PDF::loadView('tools.testPDF', $data)->setPaper('a4', 'landscape');
     
        return $pdf->download('tutsmake.pdf');
    }
    public function matricula(Request $request)
    {
        $DNI = $_POST['dni'];
        $sexo = $_POST['sexo'];
        $dateN = $_POST['dateN'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $name = $_POST['firstname'];
        $localidad = $_POST['localidad'];
        $provincia = $_POST['provincia'];
        $cp = $_POST['cp'];
        $domicilio = $_POST['domicilio'];
        $phone = $_POST['telefono'];
        $email = $_POST['mailfrom'];
        $modalidad = $_POST['modalidad'];
        $tipoDePago = $_POST['tipoDePago'];
        
        // Financiación
        $dateI = $_POST['dateI'];
        $cuota = $_POST['cuota'];
        $datosFinanciacion = $_POST['datosFinanciacion'];
        
        // Financiación otros datos
        $dniF = $_POST['dniF'];
        $sexoF = $_POST['sexoF'];
        $dateNF = $_POST['dateNF'];
        $apellido1F = $_POST['apellido1F'];
        $apellido2F = $_POST['apellido2F'];
        $nombreF = $_POST['nombreF'];
        $localidadF = $_POST['localidadF'];
        $provinciaF = $_POST['provinciaF'];
        $cpF = $_POST['cpF'];
        $domicilioF = $_POST['domicilioF'];
        $telefonoF = $_POST['telefonoF'];
        $mailfromF = $_POST['mailfromF'];
        
        // Datos facturación
        $dniFacT = $_POST['dniFacT'];
        $nombreFacT = $_POST['nombreFacT'];
        
        // Numero de cuenta
        $numCuentaFacT = $_POST['numCuentaFacT'];
        $firma=$_POST['img'];

        $fechaActual = date('d-m-Y');


        if($tipoDePago == 'Íntegro'){
            $date = $fechaActual;
            $tramo = 'Pago íntegro';
        }

        if($tipoDePago == 'Financiación'){
            $date = $dateI;
            $tramo = $cuota . " €";
        }

        if($datosFinanciacion == "1"){
            $dniF = $DNI;
            $sexoF = $sexo;
            $dateNF = $dateN;
            $apellido1F = $apellido1;
            $apellido2F = $apellido2;
            $nombreF = $name;
            $localidadF = $localidad;
            $provinciaF = $provincia;
            $cpF = $cp;
            $domicilioF = $domicilio;
            $telefonoF = $phone;
            $mailfromF = $email;
        }

        $datos = [
        "dni"    => $DNI,
        "sexo"    => $sexo,
        "dateN"    => $dateN,
        "apellido1"    => $apellido1,
        "apellido2"    => $apellido2,
        "name"    => $name,
        "localidad"    => $localidad,
        "provincia"    => $provincia,
        "cp"    => $cp,
        "domicilio"    => $domicilio,
        "phone"    => $phone,
        "email"    => $email,
        "modalidad"    => $modalidad,
        "tipoDePago"    => $tipoDePago,
        "tramo"    => $tramo,
        "dateI" => $dateI,
        "cuota" => $cuota,
        "datosFinanciacion" => $datosFinanciacion,
        "date" => $date,
        "dniF" => $dniF,
        "sexoF" => $sexoF,
        "dateNF"    => $dateNF,
        "apellido1F" => $apellido1F,
        "apellido2F" => $apellido2F,
        "nombreF" => $nombreF,
        "localidadF" => $localidadF,
        "provinciaF" => $provinciaF,
        "cpF" => $cpF,
        "domicilioF" => $domicilioF,
        "telefonoF" => $telefonoF,
        "mailfromF" => $mailfromF,
        "dniFacT" => $dniFacT,
        "nombreFacT" => $nombreFacT,
        "numCuentaFacT" => $numCuentaFacT,
        "firma" => $firma,
        ];
        $pdf = PDF::loadView('tools.matricula_master', $datos)->setPaper('a4', 'portrait');
        // return $pdf->download('matricula.pdf');
        // return view('tools.matricula_master', $datos);
                //Email para usuario

                    Mail::send("mails.mailtest", $datos, function ($message) use ($datos, $pdf) {
                        $message->subject('Matrícula Master Asesor Experto');
                        $message->attachData($pdf->output(), "Matricula_asesor_experto.pdf");
                        $message->to($datos['email']);
                    });
                    Mail::send("mails.mailtest", $datos, function ($message) use ($datos, $pdf) {
                        $message->subject('Matrícula Master Asesor Experto');
                        $message->attachData($pdf->output(), "Matricula_asesor_experto.pdf");
                        $message->to("matriculas@ayudatpymes.org");
                    });
                    return $pdf->stream();

                // Mail::send('matricula', $datos, function ($message) use ($datos, $pdf) {
                //     $message->to($datos['email'], "juanrosales@ayudat.es")
                //       ->subject('Matrícula Master Asesor Experto')
                //       ->attachData($pdf->output(), "Matricula_asesor_experto.pdf");
                // });
        
                // return $pdf->download('matricula.pdf');
    }
    public function certificado(Request $request)
    {
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $datos = [
            "dni" => $dni,
            "nombre" => $nombre
        ];
        $pdf = PDF::loadView('tools.certificado', $datos)->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}