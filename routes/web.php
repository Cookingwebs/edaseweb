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
use App\Http\Controllers\LanzamientoController;
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
// Route::get('/plan-de-carrera', CarreraController::class)->name('carrera');

Route::get('/sitemap-manually', [SitemapController::class, "manually"]);
Route::get('/sitemap-automatic', [SitemapController::class, "automatic"]);

Route::get('/send-email', [EmailController::class, 'sendEmail']);
Route::get('/send-email-becas', [EmailController::class, 'sendEmailBecas']);


Route::get('/terminos-condiciones', [AvisosController::class, "terminos"])->name('terminos');
Route::get('/politica-privacidad', [AvisosController::class, "politica"])->name('politica');
Route::get('/aviso-legal', [AvisosController::class, "aviso"])->name('aviso');
Route::get('/politica-cookies', [AvisosController::class, "cookies"])->name('cookies');
// Route::get('/politica-privacidad', TecnicoController::class);
// Route::get('/procesamiento-datos', TecnicoController::class);


Route::get('/aula-abierta', [LanzamientoController::class, "aulaAbierta"])->name('aula-abierta');
Route::get('/aula-abierta/gracias', [LanzamientoController::class, "aulaAbiertaGracias"])->name('aula-abierta-gracias');


Route::get('/test', TestController::class)->name('test');