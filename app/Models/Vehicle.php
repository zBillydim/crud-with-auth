<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

    protected $table = 'vehicles';
    protected $primaryKey = 'vehicle_id';
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'CREATED_AT' => 'datetime:Y-m-d H:i:s',
        'UPDATED_AT' => 'datetime:Y-m-d H:i:s',
    ];

    protected $fillable = [
        'vehicle_id',
        'client_id',
        'numero_client',
        'marca_vehicle',
        'modelo_vehicle',
        'km_vehicle',
        'combustivel_vehicle',
        'placa_vehicle',
        'cpf_vehicle',
        'STATUS',
    ];
}
