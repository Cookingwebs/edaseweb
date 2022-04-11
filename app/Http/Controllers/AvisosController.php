<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class AvisosController extends Controller
{
    public function terminos(){

        $robots = "noindex, follow";

        $title = "Términos y condiciones";
        $description = "Términos y condiciones de EDASE";
        $og_title = "Términos y condiciones 【Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('avisos.terminos');

    }
    public function politica(){

        $robots = "noindex, follow";

        $title = "Política de privacidad";
        $description = "Política de privacidad de EDASE";
        $og_title = "Política de privacidad 【Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('avisos.politica');

    }
    public function aviso(){

        $robots = "noindex, follow";

        $title = "Aviso legal";
        $description = "Aviso legal de EDASE";
        $og_title = "Aviso legal 【Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('avisos.aviso');

    }
    public function cookies(){

        $robots = "noindex, follow";

        $title = "Política de cookies";
        $description = "Política de cookies de EDASE";
        $og_title = "Política de cookies 【Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('avisos.cookies');

    }
}
