<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transportista
 *
 * @property $id
 * @property $nombre_trans
 * @property $estado_trans
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transportista extends Model
{
    
    static $rules = [
		'nombre_trans' => 'required',
		'estado_trans' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_trans','estado_trans'];



}
