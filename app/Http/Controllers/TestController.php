<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
       

        $robots = "noindex, nofollow";
  
        $title = "Test";
        $description = "";
        $og_title = "";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical(url()->full());
        // //SEOMeta::setRobots($robots);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle($og_title);
        OpenGraph::setUrl(url()->full());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'es_ES');


        return view('test');
    }
}
