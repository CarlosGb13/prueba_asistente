<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre_cliente
 * @property $apellido_cliente
 * @property $fecha_nacimiento
 * @property $estado_civil
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombre_cliente' => 'required',
		'apellido_cliente' => 'required',
		'fecha_nacimiento' => 'required',
		'estado_civil' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_cliente','apellido_cliente','fecha_nacimiento','estado_civil','telefono'];



}
