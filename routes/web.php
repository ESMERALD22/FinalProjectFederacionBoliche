<?php

use App\Http\Controllers\AlergiasAtletumController;
use App\Http\Controllers\AtletaDatosPersonaleController;
use App\Http\Controllers\ControlAsistenciumController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\FactorEmocionalSensorialController;
use App\Http\Controllers\FactoresReporteController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PsicologoController;
use App\Http\Controllers\ReportePsicologicoController;
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
