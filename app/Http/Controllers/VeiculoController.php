<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index()
    {
        return view('cadastroveiculo');
    }
}
