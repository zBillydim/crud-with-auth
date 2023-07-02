<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Cliente extends Authenticatable
{
    use Notifiable;

    protected $table = 'clients';
    protected $primaryKey = 'client_id';
    protected $hidden = ['password'];
    const CREATED_AT = 'CREATED_AT';
    const UPDATED_AT = 'UPDATED_AT';
    const DELETED_AT = 'DELETED_AT';
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
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
    public function scopeVerifyHasEmail($query, $email){
        return $query->where('email', $email);

        $existingClient = Cliente::where('email', $value)->first();

        if ($existingClient) {
            $errorMessage = ['Email já utilizado, por favor utilize outro.'];
            return redirect('/')->withErrors($errorMessage);
        }
    }
    
}
