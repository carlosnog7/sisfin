<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ConsultarDados\ConsultarDadosController;
use App\Http\Controllers\InserirDados\InserirDadosController;

// PUBLICO
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'autenticacao'])->name('login.autenticacao');

// PROTEGIDO
Route::middleware(['auth'])->group(function () {
    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });

    Route::prefix('inserirdados')->name('inserirdados.')->group(function () {
        Route::get('/', [InserirDadosController::class, 'index'])->name('index');
        Route::post('/', [InserirDadosController::class, 'store'])->name('store');
    });

    Route::prefix('consultardados')->name('consultardados.')->group(function () {
        Route::get('/', [ConsultarDadosController::class, 'index'])->name('index');
        Route::get('/edit/{id}', [ConsultarDadosController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [ConsultarDadosController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ConsultarDadosController::class, 'destroy'])->name('destroy');
    });
});


