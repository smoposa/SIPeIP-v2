<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table = 'entidades';

    protected $fillable = [
        'codigo',
        'nombre',
        'siglas',
        'ruc',
        'tipo',
        'estado',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relaciones
    |--------------------------------------------------------------------------
    */

    public function usuarios()
    {
        return $this->hasMany(User::class);
    }

    public function planes()
    {
        return $this->hasMany(Plan::class);
    }
}