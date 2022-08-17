<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class EncuestaController extends Controller
{
    public function encuesta9Meses(Request $request){
        $email = $request->e;
        $robots = "noindex, nofollow";
        $datos = [
            'chat' => 'no',
            'email' => $email
        ];
        $title = "Cuestionario - 9 meses";
        $description = "Nos gustaría conocer tu más sincera opinión después de realizar los 9 meses de contenido de cada área.";
        $og_title = "Cuestionario - 9 meses【EDASE Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('encuesta.9meses', $datos);

    }
}
