<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProjetosController;
use App\Http\Controllers\HabilidadesController;

use App\Http\Controllers\SobreMimController;
use App\Http\Controllers\EntreEmContatoController;

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

Route::get('/meuportifoliodev', [InicioController::class, 'index']);

Route::get('/meuportifoliodev/projetos', [ProjetosController::class, 'index']);

Route::get('/meuportifoliodev/habilidades', [HabilidadesController::class, 'index']);

Route::get('/meuportifoliodev/sobre', [SobreMimController::class, 'index']);

Route::get('/meuportifoliodev/contato', [EntreEmContatoController::class, 'index']);
