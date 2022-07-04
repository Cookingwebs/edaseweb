<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class EmprendeController extends Controller
{
    public function __invoke()
    {
        //$robots = "index, follow";
        $datos = [
            'enterprise' => 7
        ];
        $title = "Emprende";
        $description = "En la Escuela de Asesores te orientamos para montar una Asesoría de futuro. Entra aquí y da el primer paso.";
        $og_title = "¿Quieres tener una asesoría rentable? 【Emprende con EDASE 】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        //SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('emprende', $datos);
    }
}
