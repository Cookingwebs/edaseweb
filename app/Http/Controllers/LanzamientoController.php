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
            'chat' => 'ok',
            'action_form' => url()->current().'/gracias'
        ];
        $title = "Aula abierta";
        $description = "4, 5, 6 y 9 de Mayo. Inscripción GRATUITA ▷ Descubre una nueva oportunidad en el mundo de la asesoría #LaGranRenuncia";
        $og_title = "Aula abierta【EDASE Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

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
        $description = "4, 5, 6 y 9 de Mayo. Inscripción GRATUITA ▷ Descubre una nueva oportunidad en el mundo de la asesoría #LaGranRenuncia";
        $og_title = "Aula abierta【EDASE Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('lanzamiento.aula-abierta-gracias');

    }
    public function aulaAbiertaDocumentos(){

        $robots = "noindex, nofollow";
        $title = "Aula abierta - Documentación";
        $description = " Descarga aquí todo el contenido y las tareas de las clases 1, 2 y 3 ▷ Aula Abierta de EDASE";
        $og_title = "Aula abierta【EDASE Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('lanzamiento.aula-abierta-documentos');

    }
    public function aulaAbiertaContable(){

        $robots = "noindex, nofollow";
        $title = "Aula abierta - Clase 02";
        $description = "Mira aquí la grabación completa de la Clase 02 ▷ ¿Qué debe saber un asesor laboral sobre la nueva reforma?";
        $og_title = "Aula abierta【EDASE Escuela de Asesores】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('lanzamiento.aula-abierta-contable');

    }
}
