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

        return view('lanzamiento.aula-abierta-documentos', $datos);

    }
    public function aulaAbiertaContable(){

        $robots = "noindex, nofollow";
        $title = "Aula abierta - Clase 02";
        $description = "Mira aquí la grabación completa de la Clase 02 ▷ ¿Qué debe saber un asesor laboral sobre la nueva reforma?";
        $og_title = "Aula abierta【EDASE Escuela de Asesores】";
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

        return view('lanzamiento.aula-abierta-contable', $datos);

    }
    public function aulaAbiertaFiscal(){

        $robots = "noindex, nofollow";
        $title = "Aula abierta - Clase 03";
        $description = "Mira aquí la grabación completa de la Clase 03 ▷ ¿Cómo declara el IVA un asesor fiscal?";
        $og_title = "Aula abierta【EDASE Escuela de Asesores】";
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

        return view('lanzamiento.aula-abierta-fiscal', $datos);

    }
    public function aulaAbiertaLaboral(){

        $robots = "noindex, nofollow";
        $title = "Aula abierta - Clase 01";
        $description = "Mira aquí la grabación completa de la Clase 01 ▷ ¿Qué debe saber un asesor laboral sobre la nueva reforma?";
        $og_title = "Aula abierta【EDASE Escuela de Asesores】";
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

        return view('lanzamiento.aula-abierta-laboral', $datos);

    }
    public function aulaAbiertaFinal(){

        $robots = "noindex, nofollow";
        $title = "Aula abierta - Clase 04";
        $description = "Mira aquí la grabación completa de la Clase 04 ▷ ¿Qué debe saber un asesor laboral sobre la nueva reforma?";
        $og_title = "Aula abierta【EDASE Escuela de Asesores】";
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

        return view('lanzamiento.aula-abierta-final', $datos);

    }
    public function edicionEspecialFaqs(){

        $robots = "noindex, nofollow";
        $title = "Edición Especial de Mayo - FAQs";
        $description = "Resolvemos las preguntas más frecuentes sobre el Máster Asesor Experto ▷ Bolsa de trabajo, oportunidades de empleo, webinars, clases, profesores";
        $og_title = "Edición Especial de Mayo 【Máster Asesor Experto】";
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

        return view('lanzamiento.edicion-especial-faqs', $datos);

    }
    public function edicionEspecialClase(){

        $robots = "noindex, nofollow";
        $title = "Edición Especial de Mayo";
        $description = "Acompáñanos a la primera clase del Máster Asesor Experto  ▷ Introducción y tour por el campus virtual con las profesoras";
        $og_title = "Edición Especial de Mayo 【1º Clase】";
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

        return view('lanzamiento.edicion-especial-clase', $datos);

    }
    public function puertasAbiertas(){
    
        $robots = "noindex, nofollow";
        $datos = [
            'enterprise' => 7,
            'chat' => 'ok',
            'action_form' => url()->current().'/gracias'
        ];
        $title = "Puertas Abiertas de EDASE【100 BECAS DISPONIBLES】";
        $description = "29 agosto - 6 septiembre ▷ Accede a formación gratis y a becas para trabajar como asesor fiscal, laboral y contable.";
        $og_title = "Puertas Abiertas de EDASE【100 BECAS DISPONIBLES】";
    
        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);
    
        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');
    
        return view('lanzamiento.puertas-abiertas', $datos);
    
    }
    public function puertasAbiertasPromo(){
    
        $robots = "noindex, nofollow";
        $datos = [
            'enterprise' => 7,
            'chat' => 'no',
            'action_form' => url()->current().'/gracias'
        ];
        $title = "Puertas Abiertas de EDASE【100 BECAS DISPONIBLES】";
        $description = "29 agosto - 6 septiembre ▷ Accede a formación gratis y a becas para trabajar como asesor fiscal, laboral y contable.";
        $og_title = "Puertas Abiertas de EDASE【100 BECAS DISPONIBLES】";
    
        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);
    
        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');
    
        return view('lanzamiento.puertas-abiertas', $datos);
    
    }

    public function puertasAbiertasGracias(){

        $robots = "noindex, nofollow";
        $title = "Puertas Abiertas de EDASE【100 BECAS DISPONIBLES】";
        $description = "29 agosto - 6 septiembre ▷ Accede a formación gratis y a becas para trabajar como asesor fiscal, laboral y contable.";
        $og_title = "Puertas Abiertas de EDASE【100 BECAS DISPONIBLES】";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');

        return view('lanzamiento.puertas-abiertas-gracias');

    }
}

