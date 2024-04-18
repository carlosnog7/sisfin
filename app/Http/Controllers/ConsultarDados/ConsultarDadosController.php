<?php

namespace App\Http\Controllers\ConsultarDados;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultarDadosController extends Controller
{
    public function index()
    {
        return view('admin.consultardados.index');
    }
}

