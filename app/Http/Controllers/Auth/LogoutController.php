<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        
        Session::flash('logout_message', 'Você fez logout com sucesso!');
    
        return redirect()->route('login');
    }
}
