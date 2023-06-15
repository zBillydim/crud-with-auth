<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/veiculo');
        }else{
            $errorMessage = ['Credenciais inválidas.'];
            return redirect('/')->withErrors($errorMessage);
        }
    }

    public function register(Request $request){
        $email = $request->input('email');

        $existingClient = Cliente::where('email', $email)->first();

        if ($existingClient) {
            return response()->json(['error' => "Email já utilizado, por favor utilize outro."], 401);
        }

        Cliente::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return response()->json(['success' => "true"], 201);
    }
}