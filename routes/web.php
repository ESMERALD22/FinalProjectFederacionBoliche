<?php

use App\Exports\CentroExport;
use App\Http\Controllers\AlergiasAtletumController;
use App\Http\Controllers\AtletaDatosPersonaleController;
use App\Http\Controllers\ControlAsistenciumController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DeptoMunController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\FactorEmocionalSensorialController;
use App\Http\Controllers\FactoresReporteController;
use App\Http\Controllers\Ficha1Controller;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\MunicipioController;

use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\FadnController;
use App\Http\Controllers\NivelFadnController;
use App\Http\Controllers\NivelCdagController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\EntrenadorDatosPersonaleController;
use App\Http\Controllers\CentroDeportivoController;
use App\Http\Controllers\HorarioAtencionCdController;
use App\Http\Controllers\EntrenadorCentroDeportivoController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\CategoriumController;
use App\Http\Controllers\TipoAtletumController;
use App\Http\Controllers\LineaDesarrolloController;
use App\Http\Controllers\PrtController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AsignacionAtletumController;
use App\Http\Controllers\EtapaDeportivaController;

use App\Http\Controllers\AtletaController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\Form272Controller;
use App\Http\Controllers\Form27Controller;
use App\Http\Controllers\PsicologoController;
use App\Http\Controllers\RelacionFAEI;
use App\Http\Controllers\ReportAsistenciaController;
use App\Http\Controllers\ReportePsicologicoController;
use App\Http\Controllers\ReportCAController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\TipoAsistenciumController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('departamentos', DepartamentoController::class);
Route::resource('municipios', MunicipioController::class);
Route::resource('institucions',InstitucionController::class);
Route::resource('fadns',FadnController::class);
Route::resource('nivel-fadns',NivelFadnController::class);
Route::resource('nivel-cdags',NivelCdagController::class);
Route::resource('contratos',ContratoController::class);
Route::resource('entrenador-datos-personales',EntrenadorDatosPersonaleController::class);
Route::resource('centro-deportivos',CentroDeportivoController::class);

Route::resource('horario-atencion-cds',HorarioAtencionCdController::class);
Route::resource('entrenador-centro-deportivos',EntrenadorCentroDeportivoController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('anuncio', AnuncioController::class);
Route::resource('categoria', CategoriumController::class);
Route::resource('tipoAtleta', TipoAtletumController::class);
Route::resource('linea-desarrollos', LineaDesarrolloController::class);
Route::resource('prt', PrtController::class);
Route::resource('administradors', AdministradorController::class);
Route::resource('asignacionAtletum', AsignacionAtletumController::class);
Route::resource('etapa-deportivas', EtapaDeportivaController::class);


Route::resource('tipo-asistencia', TipoAsistenciumController::class);
Route::resource('encargados', EncargadoController::class);
Route::resource('inscripcions', InscripcionController::class);
Route::resource('alergias-atleta', AlergiasAtletumController::class);
Route::resource('atleta-datos-personales', AtletaDatosPersonaleController::class);
Route::resource('control-asistencia', ControlAsistenciumController::class);
Route::resource('psicologos', PsicologoController::class);
Route::resource('factor-emocional-sensorials', FactorEmocionalSensorialController::class);
Route::resource('reporte-psicologicos', ReportePsicologicoController::class);
Route::resource('factores-reportes', FactoresReporteController::class);
Route::resource('tareas', TareaController::class);
Route::resource('DeptoMun', DeptoMunController::class);
Route::resource('ficha1s', Ficha1Controller::class);
Route::resource('relacionFAEI', RelacionFAEI::class);
Route::resource('report', ReportAsistenciaController::class);
Route::resource('report1', ReportCAController::class);
Route::resource('form27', Form27Controller::class);
Route::resource('form272', Form272Controller::class);
Route::resource('formAtleta', AtletaController::class);
Route::resource('formEntrenador', EntrenadorController::class);
Route::resource('formCentro', CentroController::class);





//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
