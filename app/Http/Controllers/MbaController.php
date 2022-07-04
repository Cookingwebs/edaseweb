<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class MbaController extends Controller
{
    public function __invoke(){
        //$robots = "index, follow";
        $datos = [
            'enterprise' => 7
        ];
        $title = "MBA";
        $description = "Estrategia formativa y empresarial ▷ Lanza tu carrera junto a los directivos de la mayor Asesoría de Empresas en España";
        $og_title = "MBA en Dirección de Asesorías y Despachos【EDASE】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        //SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('mba', $datos);
    }

    public function promo(){
        $robots = "noindex, nofollow";
        $datos = [
            'enterprise' => 7,
            'chat' => 'ok'
        ];
        $title = "Plan Empresarial EDASE";
        $description = "¿Eres asesor de empresas? ▷ Aprende a proyectar tu carrera como experto o impulsa la creación de tu propio despacho.";
        $og_title = "Programa Empresarial Asesorías【APRENDE A CAPTAR CLIENTES】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        //SEOMeta::setRobots($robots);;

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('promo.mba-promo', $datos);
    }
}
