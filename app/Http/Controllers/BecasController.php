<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class BecasController extends Controller
{
    public function __invoke(){

        $robots = "noindex, nofollow";

        $title = "Admisión y BECAS";
        $description = "Bienvenid@ al portal de admisiones. Envía tu matrícula y nos pondremos en contacto contigo en menos de 24 horas.";
        $og_title = "Matricúlate en EDASE【 BECAS y Admisiones 】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        // SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('becas');
}
}
