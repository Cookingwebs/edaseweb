<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    public function __invoke(){

        $datos = [
            'enterprise' => 7
        ];

        //$robots = "index, follow";
  
        $title = "Técnico";
        $description = "Si quieres trabajar de asesor, esto es para ti ▷ Fórmate desde cero como técnico fiscal, laboral y contable";
        $og_title = "Especialización técnico en Asesoría 【EDASE】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');


        return view('tecnico', $datos);
    }
}
