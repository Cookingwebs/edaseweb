<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){

        $robots = "index, follow";
        
        $title = "EDASE - Escuela de Asesores";
        $description = "Escuela de formación creada por Ayuda T Pymes ▷ Empieza aquí tu futuro en el sector de la asesoría";
        $og_title = "EDASE【Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('home');
    }
}