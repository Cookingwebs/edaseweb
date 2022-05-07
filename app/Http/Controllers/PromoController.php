<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function masterContador(){
        $robots = "noindex, nofollow";
        $datos = [
            'enterprise' => 7,
            'chat' => 'ok',
            'action_form' => url()->current().'/gracias'
        ];
        $title = "Solicitud de Becas";
        $description = "Solicita una beca antes del 17 de mayo para formarte en el Máster Asesor Experto  ▷ #LaGranOportunidad. Plazas limitadas.";
        $og_title = "Solicitud de Becas【Edición Especial Mayo 2022】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('promo.master-contador', $datos);
    }
    public function masterContadorGracias(){

        $robots = "noindex, nofollow";
        $title = "Solicitud de Becas";
        $description = "Solicita una beca antes del 17 de mayo para formarte en el Máster Asesor Experto  ▷ #LaGranOportunidad. Plazas limitadas.";
        $og_title = "Solicitud de Becas【Edición Especial Mayo 2022】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('promo.master-contador-gracias');

    }
}
