<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empaque
 *
 * @property $id
 * @property $nombre_empaque
 * @property $estado
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empaque extends Model
{
    
    static $rules = [
		'nombre_empaque' => 'required',
		'estado' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_empaque','estado','descripcion'];



}
