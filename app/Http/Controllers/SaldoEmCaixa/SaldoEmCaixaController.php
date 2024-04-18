<?php

namespace App\Http\Controllers\SaldoEmCaixa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaldoEmCaixaController extends Controller
{
    public function index()
    {
        return view('admin.saldoemcaixa.index');
    }
}

