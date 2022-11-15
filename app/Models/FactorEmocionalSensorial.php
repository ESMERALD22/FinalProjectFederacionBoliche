<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FactorEmocionalSensorial
 *
 * @property $id
 * @property $nombreFactor
 * @property $created_at
 * @property $updated_at
 *
 * @property FactoresReporte[] $factoresReportes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FactorEmocionalSensorial extends Model
{
  public $table = "factor_emocional_sensorial";
    
    static $rules = [
		'nombreFactor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreFactor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function factoresReportes()
    {
        return $this->hasMany('App\Models\FactoresReporte', 'idFactorEmocionalSensorial', 'id');
    }
    

}
