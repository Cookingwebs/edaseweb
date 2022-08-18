<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function master(){
        $robots = "noindex, nofollow";
        $title = "Matrícula";
        $description = "Matrícula";
        $og_title = "Matrícula";
        $datos = [
            'chat' => 'no'
        ];

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('matricula.master', $datos);
    }
    public function condiciones(){
        $robots = "noindex, follow";

        $title = "Considicones de venta";
        $description = "Considicones de venta de EDASE";
        $og_title = "Considicones de venta 【Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('avisos.condiciones');
    }
    public function certificado(){
        $robots = "noindex, nofollow";
        $title = "Certificado";
        $description = "Certificado";
        $og_title = "Certificado";
        $datos = [
            'chat' => 'no'
        ];

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('lanzamiento.certificado', $datos);
    }
}
