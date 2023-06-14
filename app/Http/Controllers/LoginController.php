<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['success' => "true"], 200);
        } else {
            return response()->json(['error' => "Credenciais inválidas."], 400);
        }
    }

    public function register(Request $request){
        $email = $request->input('email');

        $existingClient = Cliente::where('email', $email)->first();

        if ($existingClient) {
            return response()->json(['error' => "Email já utilizado, por favor utilize outro."], 400);
        }

        Cliente::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return response()->json(['success' => "true"], 200);
    }
}