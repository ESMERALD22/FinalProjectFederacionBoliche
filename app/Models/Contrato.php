<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrato
 *
 * @property $id
 * @property $nombreContrato
 * @property $created_at
 * @property $updated_at
 *
 * @property EntrenadorCentroDeportivo[] $entrenadorCentroDeportivos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contrato extends Model
{
  public $table = "contrato";
    static $rules = [
		'nombreContrato' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreContrato'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entrenadorCentroDeportivos()
    {
        return $this->hasMany('App\Models\EntrenadorCentroDeportivo', 'idContrato', 'id');
    }
    

}
