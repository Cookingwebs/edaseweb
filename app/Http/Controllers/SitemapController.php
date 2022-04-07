<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function manually(){
        $sitemap = Sitemap::create()
                    ->add(Url::create("/")) 
                    ->add(Url::create("/metodologia")) 
                    ->add(Url::create("/admisiones")) 
                    ->add(Url::create("/master-asesoria")) 
                    ->add(Url::create("/mba")) 
                    ->add(Url::create("/tecnico-asesoria")) 
                    ->add(Url::create("/conocenos"));
                    try {
                        $sitemap->writeToFile(public_path("sitemap.xml"));
                        return "Sitemap Creado";
                    } catch (\Throwable $th) {
                        return $th;
                    }
    }
    public function automatic(){
        SitemapGenerator::create(url('/'))
        ->getSitemap()
        ->writeToFile("sitemap.xml");
    }
}
