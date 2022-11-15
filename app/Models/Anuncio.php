<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Anuncio
 *
 * @property $id
 * @property $fecha
 * @property $lugar
 * @property $detalle
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Anuncio extends Model
{
  public $table = "anuncio";
    static $rules = [
		'fecha' => 'required',
		'lugar' => 'required',
		'detalle' => 'required',
    ];


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','lugar','detalle'];



}
