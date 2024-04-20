<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ConsultarDados\ConsultarDadosController;
use App\Http\Controllers\InserirDados\InserirDadosController;
use App\Http\Controllers\SaldoEmCaixa\SaldoEmCaixaController;

// Rotas públicas
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

// Rotas protegidas
Route::middleware(['auth'])->group(function () {
    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });

    Route::prefix('inserirdados')->name('inserirdados.')->group(function () {
        Route::get('/', [InserirDadosController::class, 'index'])->name('index');
    });

    Route::prefix('consultardados')->name('consultardados.')->group(function () {
        Route::get('/', [ConsultarDadosController::class, 'index'])->name('index');
    });

    Route::prefix('saldoemcaixa')->name('saldoemcaixa.')->group(function () {
        Route::get('/', [SaldoEmCaixaController::class, 'index'])->name('index');
    });
});
