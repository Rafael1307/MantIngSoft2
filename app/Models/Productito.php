<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Productito
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $descripcion
 * @property $imagen
 * @property $idCategoria
 * @property $idMarca
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Productito extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
		'descripcion' => 'required',
		'imagen' => 'required',
		'idCategoria' => 'required',
		'idMarca' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','precio','descripcion','imagen','idCategoria','idMarca'];



}
