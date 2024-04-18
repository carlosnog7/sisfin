<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ConsultarDados\ConsultarDadosController;
use App\Http\Controllers\InserirDados\InserirDadosController;
use App\Http\Controllers\SaldoEmCaixa\SaldoEmCaixaController;


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/inserirdados', [InserirDadosController::class, 'index'])->name('inserirdados.index');
Route::get('/consultardados', [ConsultarDadosController::class, 'index'])->name('consultardados.index');
Route::get('/saldoemcaixa', [SaldoEmCaixaController::class, 'index'])->name('saldoemcaixa.index');
/*
Route::prefix('inserirdados')->middleware('auth')->group(function () {
    Route::get('/', [InserirDadosController::class, 'index'])->name('inserirdados.index');
});
Route::prefix('consultardados')->middleware('auth')->group(function () {
    Route::get('/', [ConsultarDadosController::class, 'index'])->name('consultardados.index');
});
Route::prefix('saldoemcaixa')->middleware('auth')->group(function () {
    Route::get('/', [SaldoEmCaixaController::class, 'index'])->name('saldoemcaixa.index');
});
*/

