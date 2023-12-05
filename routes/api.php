<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ColaboradorController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('unit/create', [UnitController::class, 'store']);
Route::get('/unit', [UnitController::class, 'index']);

// Colaboradores

Route::get('/collab', [CollaboratorController::class, 'index']);
Route::post('/collab/create', [CollaboratorController::class, 'create']);

// Relatórios

Route::get('/relatorio/colaboradores', [ReportController::class, 'colaboradores']);
Route::get('/relatorio/total-colaboradores-por-unidade', [ReportController::class, 'totalColaboradoresPorUnidade']);
Route::get('/relatorio/ranking-colaboradores', [ReportController::class, 'rankingColaboradores']);

//Colaboradores

// routes/web.php or routes/api.php


Route::post('/colaboradores/{colaboradorId}/cadastrar-nota-desempenho', [EmployePositionController::class, 'cadastrarNotaDesempenho']);







