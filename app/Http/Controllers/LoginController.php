<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/veiculo');
        } else {
            $errorMessage = 'Credenciais inválidas.';
            return redirect('/')->withErrors($errorMessage);
        }
    }

    public function register(Request $request)
    {
        $emailExists = Cliente::verifyHasEmail($request->input('email'))->exists();

        if (!$emailExists) {
            $cliente = Cliente::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]);

            if ($cliente) {
                if (Auth::attempt($request->only('email', 'password'))) {
                    Session::flash('register_success', 'Cadastro realizado com sucesso');
                    return redirect('/veiculo');
                }
            }
            $errorMessage = 'Erro ao tentar cadastrar usuário, tente novamente mais tarde.';

            return redirect('/')->withErrors([$errorMessage]);
        }

        $errorMessage = 'Email já utilizado, por favor utilize outro.';

        return redirect('/')->withErrors([$errorMessage]);
    }
}
