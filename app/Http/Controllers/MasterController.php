<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function __invoke(){
        //$robots = "index, follow";
        $datos = [
            'enterprise' => 7
        ];
        $title = "Máster";
        $description = "Fórmate con el máster de Asesor Experto en la Escuela de Asesores de Ayuda T Pymes ▷ Experiencia PRÁCTICA y REAL.";
        $og_title = "Máster en Asesoría Fiscal, Laboral y Contable 【EDASE】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('master', $datos);
    }
    public function promo(){
        $robots = "noindex, nofollow";
        $datos = [
            'enterprise' => 7,
            'chat' => 'no'
        ];
        $title = "Máster";
        $description = "Fórmate con el máster de Asesor Experto en la Escuela de Asesores de Ayuda T Pymes ▷ Experiencia PRÁCTICA y REAL.";
        $og_title = "Máster en Asesoría Fiscal, Laboral y Contable 【EDASE】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);;

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('promo.master-promo', $datos);
    }
}
