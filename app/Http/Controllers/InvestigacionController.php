<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class InvestigacionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        //$robots = "index, follow";
        $datos = [
            'enterprise' => 7
        ];
        $title = "I+D";
        $description = "Desarrollo tecnológico para el sector de Asesorías ▷ Software, Digitalización, Inteligencia artificial…";
        $og_title = "Investigación y Desarrollo en EDASE【Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        //SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('investigacion', $datos);
    }
}
