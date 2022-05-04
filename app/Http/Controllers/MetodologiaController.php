<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class MetodologiaController extends Controller
{
    public function __invoke(){
        $robots = "index, follow";
        $datos = [
            'enterprise' => 7
        ];
        $title = "Metodología";
        $description = "La metodología única y exclusiva que ponen en práctica en la Escuela de Asesores creada por Ayuda T Pymes";
        $og_title = "Metodología en EDASE 【Como se forman los asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        //SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('metodologia', $datos);
    }
}
