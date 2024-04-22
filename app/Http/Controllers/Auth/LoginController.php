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
/*
    public function authenticate(Request $request)
    {
        $user = User::where('login', $request->login)->first();

        if ($user) {

            if (Hash::needsRehash($user->password)) {
                $user->password = Hash::make($request->password);
                $user->save();
            }

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
*/
    public function autenticacao(Request $request){
        $credenciais = $request-> validate([
            'login' => ['required','string'],
            'password' => ['required'],
        ], [
            'login.required' => 'Login Obrigatório',
            'login.login' => 'Login inválido',
            'password.required' => 'Senha Obrigatório'
        ]
    );
        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->with('erro', 'login ou senha invalida');
        }
    }
}


