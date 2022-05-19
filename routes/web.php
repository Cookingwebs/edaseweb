<?php

use App\Http\Controllers\AvisosController;
use App\Http\Controllers\BecasController;
use App\Http\Controllers\CarreraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConocenosController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MbaController;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\InvestigacionController;
use App\Http\Controllers\LanzamientoController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');
Route::get('/conocenos', ConocenosController::class)->name('conocenos');
Route::get('/metodologia', MetodologiaController::class)->name('metodologia');
Route::get('/admisiones', BecasController::class)->name('becas');
Route::get('/master-asesoria', MasterController::class)->name('master');
Route::get('/mba', MbaController::class)->name('mba');
Route::get('/tecnico-asesoria', TecnicoController::class)->name('tecnico');
Route::get('/plan-de-carrera', CarreraController::class)->name('carrera');
Route::get('/investigacion', InvestigacionController::class)->name('investigacion');
Route::get('/causa-social', SocialController::class)->name('social');

Route::get('/sitemap-manually', [SitemapController::class, "manually"]);
Route::get('/sitemap-automatic', [SitemapController::class, "automatic"]);

Route::get('/send-email', [EmailController::class, 'sendEmail']);
Route::get('/send-email-becas', [EmailController::class, 'sendEmailBecas']);


Route::get('/terminos-condiciones', [AvisosController::class, "terminos"])->name('terminos');
Route::get('/politica-privacidad', [AvisosController::class, "politica"])->name('politica');
Route::get('/aviso-legal', [AvisosController::class, "aviso"])->name('aviso');
Route::get('/politica-cookies', [AvisosController::class, "cookies"])->name('cookies');

// LANZAMIENTOS

Route::get('/aula-abierta', [LanzamientoController::class, "aulaAbierta"])->name('aula-abierta');
Route::get('/aula-abierta/documentos', [LanzamientoController::class, "aulaAbiertaDocumentos"])->name('aula-abierta-documentos');
Route::get('/aula-abierta/laboral', [LanzamientoController::class, "aulaAbiertaLaboral"])->name('aula-abierta-laboral');
Route::get('/aula-abierta/contable', [LanzamientoController::class, "aulaAbiertaContable"])->name('aula-abierta-contable');
Route::get('/aula-abierta/final', [LanzamientoController::class, "aulaAbiertaFinal"])->name('aula-abierta-final');
Route::get('/aula-abierta/fiscal', [LanzamientoController::class, "aulaAbiertaFiscal"])->name('aula-abierta-fiscal');
Route::get('/aula-abierta/gracias', [LanzamientoController::class, "aulaAbiertaGracias"])->name('aula-abierta-gracias');

Route::get('/edicion-especial/faqs', [LanzamientoController::class, "edicionEspecialFaqs"])->name('edicion-especial-faqs');
Route::get('/edicion-especial/clase', [LanzamientoController::class, "edicionEspecialClase"])->name('edicion-especial-clase');

// PROMOS

Route::get('/master-promo', [MasterController::class, "promo"])->name('master-promo');
Route::get('/unete', [PromoController::class, "masterContador"])->name('master-contador');
Route::get('/unete/gracias', [PromoController::class, "masterContadorGracias"])->name('master-contador-gracias');

// TESTS
Route::get('/test', TestController::class)->name('test');