<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Valor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Recupere todos os valores do banco de dados
        $valores = Valor::all();

        // Calcule o saldo total
        $saldoTotal = $valores->sum('valor');

        // Retorne a visualização do dashboard com o saldo total
        return view('admin.dashboard.index', ['saldoTotal' => $saldoTotal]);
    }
}
