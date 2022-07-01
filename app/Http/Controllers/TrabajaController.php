<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class TrabajaController extends Controller
{
    public function __invoke()
    {
        $robots = "index, follow";
        $datos = [
            'enterprise' => 7
        ];
        $title = "Emprende";
        $description = "Lanza tu carrera como asesor de empresas. Ofertas de empleo en toda la red nacional de asesorías. Da el primer paso aquí.";
        $og_title = "Bolsa de Empleo【Trabaja como asesor con EDASE】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('trabaja', $datos);
    }
}
