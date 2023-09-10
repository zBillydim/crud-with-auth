<?php

namespace App\Http\Controllers;

use App\Http\UseCases\CreateVehicleUseCase;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VeiculoController extends Controller
{
    public function index()
    {
        return view('cadastroveiculo');
    }
    public function create(Request $request)
    {
        $token = csrf_token();
        if ($token != $request->input('_token')) {
            $errorMessage = 'Token invalido';
            return redirect('/veiculo')->withErrors([$errorMessage]);
        }
        $cpf = preg_replace('/\D/', '', $request->input('cpf'));
        $numero = preg_replace('/\D/', '', $request->input('numero'));

        $model = new Vehicle();
        $createVechile = new CreateVehicleUseCase($model);

        $return = $createVechile->execute($request->all(), $cpf, $numero);
        $vehicle = json_decode($return, true);

        if (!isset($vehicle['vehicle_id'])) {
            Session::flash('failed_register', 'Falha ao cadastrar veículo');
            return redirect('/veiculo');
        }

        Session::flash('register_success', 'Veículo cadastrado com sucesso');
        return redirect('/veiculo');
    }
}
