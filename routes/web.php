<?php

use App\Http\Controllers\AvisosController;
use App\Http\Controllers\BecasController;
use App\Http\Controllers\CarreraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConocenosController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MbaController;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmprendeController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\InvestigacionController;
use App\Http\Controllers\LanzamientoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TrabajaController;
use Illuminate\Support\Facades\Redirect;

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

// LANDINGS

Route::get('/', HomeController::class)->name('home');
Route::get('/conocenos', ConocenosController::class)->name('conocenos');
Route::get('/metodologia', MetodologiaController::class)->name('metodologia');
Route::get('/admisiones', BecasController::class)->name('becas');
Route::get('/master-asesoria', MasterController::class)->name('master');
Route::get('/mba', MbaController::class)->name('mba');
Route::get('/tecnico-asesoria', TecnicoController::class)->name('tecnico');
// Route::get('/plan-de-carrera', CarreraController::class)->name('carrera');⁄

Route::get('/investigacion', InvestigacionController::class)->name('investigacion');
Route::get('/causa-social', SocialController::class)->name('social');
Route::get('/emprende', EmprendeController::class)->name('emprende');
Route::get('/trabaja/gracias', [TrabajaController::class, "gracias"])->name('trabaja-gracias');
Route::get('/trabaja', TrabajaController::class)->name('trabaja');

// HERRAMIENTAS

Route::get('/sitemap-manually', [SitemapController::class, "manually"]);
Route::get('/sitemap-automatic', [SitemapController::class, "automatic"]);

Route::get('create-pdf-file', [PDFController::class, 'index']);
Route::get('/matricula-master', [MatriculaController::class, 'master']);
Route::get('/matricula-master/condiciones-venta', [MatriculaController::class, 'condiciones'])->name('condiciones-master');
Route::post('/matricula-master/pdf', [PDFController::class, 'matricula'])->name('pdf-master');

// MAIL CONTROLLER

Route::get('/send-email', [EmailController::class, 'sendEmail']);
Route::post('/send-email-mba', [EmailController::class, 'sendEmailMBA']);
Route::get('/send-email-becas', [EmailController::class, 'sendEmailBecas']);
Route::get('/send-email-recomienda', [EmailController::class, 'sendEmailRecomienda']);

Route::post('/upload-file', [EmailController::class, 'sendFile']);
Route::post('/send-event', [EmailController::class, 'sendEvent']);

// AVISOS LEGALES

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

Route::get('/puertas-abiertas', [LanzamientoController::class, "puertasAbiertas"])->name('puertas-abiertas');
Route::get('/puertas-abiertas-promo', [LanzamientoController::class, "puertasAbiertasPromo"])->name('puertas-abiertas-promo');
Route::get('/puertas-abiertas/gracias', [LanzamientoController::class, "puertasAbiertasGracias"])->name('puertas-abiertas-gracias');
Route::get('/puertas-abiertas/clase-1', [LanzamientoController::class, "puertasAbiertasClase1"])->name('puertas-abiertas-clase-1');
Route::get('/puertas-abiertas/clase-2', [LanzamientoController::class, "puertasAbiertasClase2"])->name('puertas-abiertas-clase-2');
Route::get('/puertas-abiertas/clase-3', [LanzamientoController::class, "puertasAbiertasClase3"])->name('puertas-abiertas-clase-3');
Route::get('/puertas-abiertas/prueba-1', [LanzamientoController::class, "puertasAbiertasprueba1"])->name('puertas-abiertas-prueba-1');
Route::get('/puertas-abiertas/prueba-2', [LanzamientoController::class, "puertasAbiertasprueba2"])->name('puertas-abiertas-prueba-2');
Route::get('/puertas-abiertas/prueba-3', [LanzamientoController::class, "puertasAbiertasprueba3"])->name('puertas-abiertas-prueba-3');


Route::get('/edicion-especial/faqs', [LanzamientoController::class, "edicionEspecialFaqs"])->name('edicion-especial-faqs');
Route::get('/edicion-especial/clase', [LanzamientoController::class, "edicionEspecialClase"])->name('edicion-especial-clase');

// PROMOS

Route::get('/master-promo', [MasterController::class, "promo"])->name('master-promo');
Route::get('/promo-plan-empresarial', [MbaController::class, "promo"])->name('mba-promo');
Route::get('/unete', [PromoController::class, "masterContador"])->name('master-contador');
Route::get('/unete/gracias', [PromoController::class, "masterContadorGracias"])->name('master-contador-gracias');
Route::get('/recomienda', [PromoController::class, "recomienda"])->name('recomienda');

// GRACIAS

// ENCUESTAS

Route::get('/encuesta/9-meses', [EncuestaController::class, "encuesta9Meses"])->name('9-meses');


// TESTS
// Route::get('/test', TestController::class)->name('test');


// REDIRECCIONES

Route::get('/plan-de-carrera', function(){ 
    return Redirect::to('/trabaja', 301);
});

// Cuestionarios
// Route::get('/puertas-abiertas/cuestionarios', [CustomAuthController::class, 'dashboard']); 
// Route::get('/puertas-abiertas/login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('/puertas-abiertas/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
// Route::get('/puertas-abiertas/registration', [CustomAuthController::class, 'registration'])->name('register-user');
// Route::post('/puertas-abiertas/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('/puertas-abiertas/signout', [CustomAuthController::class, 'signOut'])->name('signout');
