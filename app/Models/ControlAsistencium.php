<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ControlAsistencium
 *
 * @property $id
 * @property $idAtleta
 * @property $fecha
 * @property $idTipoAsistencia
 * @property $created_at
 * @property $updated_at
 *
 * @property AtletaDatosPersonale $atletaDatosPersonale
 * @property TipoAsistencium $tipoAsistencium
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ControlAsistencium extends Model
{
  public $table = "control_asistencia";
    
    static $rules = [
		'idAtleta' => 'required',
		'fecha' => 'required',
		'idTipoAsistencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idAtleta','fecha','idTipoAsistencia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function atletaDatosPersonale()
    {
        return $this->hasOne('App\Models\AtletaDatosPersonale', 'id', 'idAtleta');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoAsistencium()
    {
        return $this->hasOne('App\Models\TipoAsistencium', 'id', 'idTipoAsistencia');
    }
    

}
