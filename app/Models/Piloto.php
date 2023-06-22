<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Piloto
 *
 * @property $id
 * @property $nombre_piloto
 * @property $apellido_piloto
 * @property $licencia
 * @property $tipo_licencia
 * @property $transportista
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Piloto extends Model
{
    
    static $rules = [
		'nombre_piloto' => 'required',
		'apellido_piloto' => 'required',
		'licencia' => 'required',
		'tipo_licencia' => 'required',
		'transportista' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_piloto','apellido_piloto','licencia','tipo_licencia','transportista'];



}
