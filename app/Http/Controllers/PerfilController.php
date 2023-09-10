<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;



class PerfilController extends Controller
{

    public function index()
    {
        $auth = Auth::user();

        $cliente = Cliente::find($auth->client_id);

        $nome = $cliente->name;
        $email = $cliente->email;

        view()->share('nome', $nome);
        view()->share('email', $email);
        return view('perfil');
    }
}
