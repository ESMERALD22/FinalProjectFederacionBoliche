<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarea
 *
 * @property $id
 * @property $idReporte
 * @property $tarea
 * @property $fechaInicial
 * @property $fechaFinal
 * @property $hora
 * @property $created_at
 * @property $updated_at
 *
 * @property ReportePsicologico $reportePsicologico
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarea extends Model
{
    
    static $rules = [
		'idReporte' => 'required',
		'tarea' => 'required',
		'fechaInicial' => 'required',
		'fechaFinal' => 'required',
		'hora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idReporte','tarea','fechaInicial','fechaFinal','hora'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reportePsicologico()
    {
        return $this->hasOne('App\Models\ReportePsicologico', 'id', 'idReporte');
    }
    

}
