<?php

namespace App\Http\Controllers;

use App\Mail\formVentas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class EmailController extends Controller
{

    public string $name;
    public string $phone;
    public string $email;
    public string $canal;
    public string $url;
    public string $notificaciones;
    public string $idEnterprise;
    public string $gclid;
    public string $idAnalytics;
    public string $consulta;

    // public function index()
    // {
    //     return view('pruebaCorreo');
    // }
    public function crmLogin(){
        $post = array(
            "email" => "juanrosales@ayudat.es",
            "password" => "Junio2010"
        );

        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjE3MjViOGYwYzQwNGNlYTBmYWNhMzFmNmEwYTE1YjlhNzg2ZjZlNjg0NjAxMmNhMTM1MGE5OTUxY2M5NTA2YjViZGVkZDczYmU0MTA0ZDIiLCJpYXQiOjE1ODA3MjM0NjAsIm5iZiI6MTU4MDcyMzQ2MCwiZXhwIjoxNjEyMzQ1ODYwLCJzdWIiOiIxMyIsInNjb3BlcyI6W119.JJJtLRK6XgGlGvrOy9wrxrSKUQwF4JCSTJBbD8hfI8UpEmk3T1tSGR9KfYrXSHt1QJ5tH08sv2vzshyqChMAdGeQImN9vUygyVzi2PwT48NPW6JnXjpgCTmY7WKUxA-pfA-65FVKURX-TeXlO1eC680dWkerkYm6-_62HA9_uIpEe7GtndSEv1epssNpVC7AwvbYm7U3L7cz0o9Vfdqd3r096FcKjcmq4O8CEQ1nYS-NjNL19zKL18sHjTlGjCpJuoK_INmO2ZxHOue5VYppQd-Ip3nakC9eIPcxM0mBFsjwLSejGZldpds_yI4Xecja7cdcSJapz_VY3S_wek15CU6cMgcKd-ii1M6gCV3jsMPx7WHHQf5d97CizDgOIB90_OTC0aI3kl9c8aR1NCJO0uowfg_JD5p9M6Dzn-gIj7Utz3O4MIwpXhtkScXGuPKIk_S_zzBPbx-02jIz6qqkB5UJV1Z59_h2V0Pn56RNyEnzWJJO6Hp5lRBsvBSk0kS07nCYLS4E7g6zSRonogGNTxuyZ9Ip-82XF2j8ZmO7CDONHwHJtInSYnE37aEwsTBphZH66ho-mXdqXU-u_iKpixeyRi1Hbx2T2nTQ8aIOEKuQ88pZvcSJfjsM_lUoTJGL7QSaKAAQFxjPr4CyjE_EAO_SnQr4UpA1r18IfasciBg";

        header('Content-Type: application/json'); // Specify the type of data
        //$ch = curl_init('https://dev.crm.almaintelligence.com/api/login'); // Initialise cURL
        $ch = curl_init('https://crm.almaintelligence.com/api/login'); // Initialise cURL
        $post = json_encode($post); // Encode the data array into a JSON string
        $authorization = "Authorization: Bearer " . $token; // Prepare the authorisation token
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Inject the token into the header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1); // Specify the request method as POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Set the posted fields
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
        $result = curl_exec($ch); // Execute the cURL statement
        curl_close($ch); // Close the cURL connection
        $data = json_decode($result);
        return $data;
    }

    public function crmSend(array $datos, object $data){
                header('Content-Type: application/json'); // Specify the type of data
                //$ch = curl_init('https://dev.crm.almaintelligence.com/api/login'); // Initialise cURL
                $ch = curl_init('https://crm.almaintelligence.com/api/leads'); // Initialise cURL
                $datosFormulario = json_encode($datos); // Encode the data array into a JSON string
                $authorization = "Authorization: Bearer " . $data->data->token; // Prepare the authorisation token
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $authorization)); // Inject the token into the header
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, 1); // Specify the request method as POST
                curl_setopt($ch, CURLOPT_POSTFIELDS, $datosFormulario); // Set the posted fields
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
                $result2 = curl_exec($ch); // Execute the cURL statement
                curl_close($ch); // Close the cURL connection
                $lead = json_decode($result2);
                return $lead;
    }

    public function sendEmail()
    {

            $this -> name = $_GET['name'];
            $this -> phone = $_GET['phone'];
            $this -> email = $_GET['email'];
            $this -> canal = $_GET['canal'];
            $this -> url = $_GET['url'];
            $this -> notificaciones = $_GET['notificaciones'];
            if(isset($_GET['idEnterprise'])){
                $this -> idEnterprise = $_GET['idEnterprise'];
            }else{
                $this -> idEnterprise = 7;
            }
            $this -> gclid = $_GET['gclid'];
            $this -> idAnalytics = $_GET['idAnalytics'];
            

            // return var_dump($_POST);

            $datosFormulario = array(

                "name" =>  $this -> name,
                "email" => $this -> email,
                "phone" =>  $this -> phone,
                "consulta" => "",
                "canal" => $this -> canal,
                "url" => $this -> url,
                "notificaciones" => $this -> notificaciones,
                "gclid" =>$this -> gclid,
                "idAnalytics" => $this -> idAnalytics,
                "idEnterprise" => $this -> idEnterprise
            );
            // return json_encode(1);
            $data = $this -> crmLogin();

            if ($data->success) {
                $lead = $this -> crmSend($datosFormulario, $data);
                if ($lead->success) {
                    return json_encode(1);
                } else {
                    // Mail::to("j.rosalesweb@gmail.com")->send(new formVentas($this->name, $this->phone, $this->email, $this->notificaciones));
                //    return view('vistaEmail');
                   return json_encode(1);
                }
            } else {
                return json_encode(0);
            }
    }
    public function sendEmailBecas()
    {

            $this -> name = $_GET['name'];
            $this -> phone = $_GET['phone'];
            $this -> email = $_GET['email'];
            $this -> canal = $_GET['canal'];
            $this -> url = $_GET['url'];
            $this -> consulta = $_GET['consulta'];
            if(isset($_GET['idEnterprise'])){
                $this -> idEnterprise = $_GET['idEnterprise'];
            }else{
                $this -> idEnterprise = 7;
            }
            $this -> gclid = $_GET['gclid'];
            $this -> idAnalytics = $_GET['idAnalytics'];
            

            // return var_dump($_POST);

            $datosFormulario = array(

                "name" =>  $this -> name,
                "email" => $this -> email,
                "phone" =>  $this -> phone,
                "consulta" => $this -> consulta,
                "canal" => $this -> canal,
                "url" => $this -> url,
                "notificaciones" => 1,
                "gclid" =>$this -> gclid,
                "idAnalytics" => $this -> idAnalytics,
                "idEnterprise" => $this -> idEnterprise
            );

            // return var_dump($_POST);

            // return json_encode(1); 
            
            $data = $this -> crmLogin();

            if ($data->success) {
                $lead = $this -> crmSend($datosFormulario, $data);
                if ($lead->success) {
                    return json_encode(1);
                } else {
                   return json_encode(0);
                }
            } else {
                return json_encode(0);
            }
    }
 }

