<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\FadnController;
use App\Http\Controllers\NivelFadnController;
use App\Http\Controllers\NivelCdagController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\EntrenadorDatosPersonaleController;
use App\Http\Controllers\CentroDeportivoController;
use App\Http\Controllers\HorarioAtencionCentroDeportivoController;
use App\Http\Controllers\EntrenadorCentroDeportivoController;
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
Route::resource('horario-atencion-centro-deportivos',HorarioAtencionCentroDeportivoController::class);
Route::resource('entrenador-centro-deportivos',EntrenadorCentroDeportivoController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
