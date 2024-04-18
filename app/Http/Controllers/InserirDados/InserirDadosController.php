<?php

namespace App\Http\Controllers\InserirDados;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InserirDadosController extends Controller
{
    public function index()
    {
        return view('admin.inserirdados.index');
    }
}

