<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HorarioAtencionCd
 *
 * @property $id
 * @property $idCentroDeportivo
 * @property $dia
 * @property $horaApertura
 * @property $horaCierre
 * @property $created_at
 * @property $updated_at
 *
 * @property CentroDeportivo $centroDeportivo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HorarioAtencionCd extends Model
{
  public $table = "horario_atencion_cd";
    static $rules = [
		'idCentroDeportivo' => 'required',
		'dia' => 'required',
		'horaApertura' => 'required',
		'horaCierre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCentroDeportivo','dia','horaApertura','horaCierre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function centroDeportivo()
    {
        return $this->hasOne('App\Models\CentroDeportivo', 'id', 'idCentroDeportivo');
    }
    

}
