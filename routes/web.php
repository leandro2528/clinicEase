<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\http\Controllers\AgendaController;

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
});

