<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Despacho
 *
 * @property $id
 * @property $producto
 * @property $peso_tara
 * @property $peso_bruto
 * @property $peso_neto
 * @property $fecha_peso
 * @property $fecha_despacho
 * @property $transportista
 * @property $cliente
 * @property $piloto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Despacho extends Model
{
    
    static $rules = [
		'producto' => 'required',
		'peso_tara' => 'required',
		'peso_bruto' => 'required',
		'peso_neto' => 'required',
		'fecha_peso' => 'required',
		'fecha_despacho' => 'required',
		'transportista' => 'required',
		'cliente' => 'required',
		'piloto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto','peso_tara','peso_bruto','peso_neto','fecha_peso','fecha_despacho','transportista','cliente','piloto'];



}
