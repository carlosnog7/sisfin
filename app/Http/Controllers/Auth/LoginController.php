<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Importe o modelo User se ainda não estiver importado

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $user = User::where('login', $request->login)->first();

        if ($user) {
            // Verifica se a senha precisa de rehash
            if (Hash::needsRehash($user->password)) {
                $user->password = Hash::make($request->password);
                $user->save();
            }

            // Tenta autenticar o usuário com a senha fornecida
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return redirect()->intended('dashboard');
            } else {
                // Senha incorreta
                return back()->withErrors(['password' => 'Senha incorreta.']);
            }
        }

        // Usuário não encontrado
        return back()->withErrors(['username' => 'Usuário não encontrado.']);
    }
}


