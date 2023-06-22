<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recepcion
 *
 * @property $id
 * @property $cliente
 * @property $transportista
 * @property $no_placa
 * @property $piloto
 * @property $fecha_recepcion
 * @property $nombre_producto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recepcion extends Model
{
    
    static $rules = [
		'cliente' => 'required',
		'transportista' => 'required',
		'no_placa' => 'required',
		'piloto' => 'required',
		'fecha_recepcion' => 'required',
		'nombre_producto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente','transportista','no_placa','piloto','fecha_recepcion','nombre_producto'];



}
