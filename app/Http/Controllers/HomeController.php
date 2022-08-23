<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){

        $robots = "index, follow";
        $datos = [
            'enterprise' => 7
        ];
        $title = "EDASE - Escuela de Asesores de Ayuda T Pymes";
        $description = "Escuela de formación creada por Ayuda T Pymes ▷ Empieza aquí tu futuro en el sector de la asesoría";
        $og_title = "EDASE - Escuela de Asesores de Ayuda T Pymes";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addImage('https://edase.es/images/imagen_destacada.jpg');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('home', $datos);
    }
}