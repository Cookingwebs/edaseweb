<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function __invoke(){

        $robots = "noindex, nofollow";
        
        $title = "Plan de Carrera";
        $description = "Cumple tus objetivos profesionales forjando tu plan de carrera con la orientación de la Escuela de Asesores.";
        $og_title = "Plan de Carrera con EDASE【 Formamos al asesor del futuro 】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('carrera');
    }
}
