<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportePsicologico
 *
 * @property $id
 * @property $idLic
 * @property $idAtleta
 * @property $fechaHora
 * @property $Hora
 * @property $numeroSesion
 * @property $impresionClinica
 * @property $analisisSemiologico
 * @property $desarrollo
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property AtletaDatosPersonale $atletaDatosPersonale
 * @property FactoresReporte[] $factoresReportes
 * @property Psicologo $psicologo
 * @property Tarea[] $tareas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ReportePsicologico extends Model
{
  public $table = "reporte_psicologico";
    
    static $rules = [
		'idLic' => 'required',
		'idAtleta' => 'required',
		'fechaHora' => 'required',
		'Hora' => 'required',
		'numeroSesion' => 'required',
		'impresionClinica' => 'required',
		'analisisSemiologico' => 'required',
		'desarrollo' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idLic','idAtleta','fechaHora','Hora','numeroSesion','impresionClinica','analisisSemiologico','desarrollo','observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function atletaDatosPersonale()
    {
        return $this->hasOne('App\Models\AtletaDatosPersonale', 'id', 'idAtleta');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function factoresReportes()
    {
        return $this->hasMany('App\Models\FactoresReporte', 'idReporte', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function psicologo()
    {
        return $this->hasOne('App\Models\Psicologo', 'idpsicologo', 'idLic');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tareas()
    {
        return $this->hasMany('App\Models\Tarea', 'idReporte', 'id');
    }
    

}
