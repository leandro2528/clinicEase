<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\http\Controllers\AgendaController;
use App\http\Controllers\ConvenioController;
use App\http\Controllers\ListaesperaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboards-index');
});

Route::prefix('/agendas')->group(function() {
    Route::get('/', [AgendaController::class, 'index'])->name('agendas-index');
    Route::get('/create', [AgendaController::class, 'create'])->name('agendas-create');
    Route::post('/', [AgendaController::class, 'store'])->name('agendas-store');
    Route::get('/{id}/edit', [AgendaController::class, 'edit'])->where('id', '[0-9]+')->name('agendas-edit');
    Route::put('/{id}', [AgendaController::class, 'update'])->where('id', '[0-9]+')->name('agendas-update');
    Route::delete('/{id}', [AgendaController::class, 'destroy'])->where('id', '[0-9]+')->name('agendas-destroy');
});

Route::prefix('/listaesperas')->group(function() {
    Route::get('/', [listaesperaController::class, 'index'])->name('listaesperas-index');
    Route::post('/', [ListaesperaController::class, 'store'])->name('listaesperas-store');
    
});

