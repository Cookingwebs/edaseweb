<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class ConocenosController extends Controller
{
    public function __invoke(){
        
        $robots = "index, follow";
        $datos = [
            'enterprise' => 7
        ];
        $title = "Conócenos";
        $description = "Descubre EDASE ▷ la primera escuela especializada en asesoría creada por Ayuda T Pymes";
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

        return view('conocenos', $datos);
    }
}