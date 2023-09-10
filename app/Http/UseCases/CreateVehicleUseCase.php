<?php

namespace App\Http\UseCases;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class CreateVehicleUseCase
{
    private $vehicles;
    public function __construct(Vehicle $vehicle)
    {
        $this->vehicles = $vehicle;
    }

    public function execute(array $data, int $cpf, int $numero): string
    {
        $user = Auth::user();

        $vehicle_id = $this->vehicles->create([
            'client_id' => $user->client_id,
            'marca_vehicle' => ($data['marca'] ?? null),
            'modelo_vehicle' => ($data['modelo'] ?? null),
            'km_vehicle' => ($data['km_rodados'] ?? null),
            'combustivel_vehicle' => ($data['combustivel'] ?? null),
            'placa_vehicle' => ($data['placa'] ?? null),
            'cpf_vehicle' => ($cpf ?? null),
            'numero_client' => ($numero ?? null),
            'STATUS' => ($data['status'] ?? 'Desativado'),
        ]);

        return $vehicle_id;
    }
}
