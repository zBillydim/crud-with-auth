<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ClienteController extends Controller
{
    public function changePass(Request $request)
    {
        try {
            $user = Auth::user();

            if (!Hash::check($request->input('currentPassword'), $user->password)) {
                return redirect('/perfil')->withErrors('Senha atual incorreta');
            }

            $pass = $request->input('newPassword');
            $this->changePassword($pass, $user->client_id);

            Session::flash('success', 'Senha alterada com sucesso');
            return redirect('/perfil');
        } catch (Exception $e) {
            Session::flash('error', 'Ocorreu um erro ao alterar a senha, tente novamente');
            return redirect('/perfil');
        }
    }

    public function changePassword($newPassword, $user)
    {
        try {
            $currentUser = Cliente::find($user);
            $currentUser->password = $newPassword;
            $currentUser->save();
        } catch (Exception $e) {
            throw new Exception("Ocorreu um erro ao alterar a senha, tente novamente");
        }
    }
}
