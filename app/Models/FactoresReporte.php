<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FactoresReporte
 *
 * @property $id
 * @property $idFactorEmocionalSensorial
 * @property $idReporte
 * @property $puntuacion
 * @property $created_at
 * @property $updated_at
 *
 * @property FactorEmocionalSensorial $factorEmocionalSensorial
 * @property ReportePsicologico $reportePsicologico
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FactoresReporte extends Model
{
  public $table = "factores_reporte";
    
    static $rules = [
		'idFactorEmocionalSensorial' => 'required',
		'idReporte' => 'required',
		'puntuacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idFactorEmocionalSensorial','idReporte','puntuacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function factorEmocionalSensorial()
    {
        return $this->hasOne('App\Models\FactorEmocionalSensorial', 'id', 'idFactorEmocionalSensorial');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reportePsicologico()
    {
        return $this->hasOne('App\Models\ReportePsicologico', 'id', 'idReporte');
    }
    

}
