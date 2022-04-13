<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class LanzamientoController extends Controller
{
    public function aulaAbierta(){

        $robots = "noindex, nofollow";
        $datos = [
            'enterprise' => 7,
            'action_form' => url()->current().'/gracias'
        ];
        $title = "Aula abierta";
        $description = "3, 4 y 5 de Mayo. Inscripción GRATUITA ▷ Descubre una nueva oportunidad en el mundo de la asesoría #LaGranRenuncia";
        $og_title = "Aula abierta【EDASE Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        //SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('lanzamiento.aula-abierta', $datos);

    }
    public function aulaAbiertaGracias(){

        $robots = "noindex, nofollow";
        $title = "Aula abierta";
        $description = "3, 4 y 5 de Mayo. Inscripción GRATUITA ▷ Descubre una nueva oportunidad en el mundo de la asesoría #LaGranRenuncia";
        $og_title = "Aula abierta【EDASE Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        //SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('lanzamiento.aula-abierta-gracias');

    }
}
