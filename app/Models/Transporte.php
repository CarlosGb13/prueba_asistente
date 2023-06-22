<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transporte
 *
 * @property $id
 * @property $transportista
 * @property $no_placa
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transporte extends Model
{
    
    static $rules = [
		'transportista' => 'required',
		'no_placa' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['transportista','no_placa','estado'];



}
