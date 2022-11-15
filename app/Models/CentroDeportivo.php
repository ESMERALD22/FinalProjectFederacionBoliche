<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CentroDeportivo
 *
 * @property $id
 * @property $nombreCentroDeportivo
 * @property $direccion
 * @property $implementacion
 * @property $accesibilidad
 * @property $idFADN
 * @property $idInstitucion
 * @property $espacioFisico
 * @property $created_at
 * @property $updated_at
 * @property $idMunicipio
 *
 * @property AsignacionAtletum[] $asignacionAtletas
 * @property EntrenadorCentroDeportivo[] $entrenadorCentroDeportivos
 * @property Fadn $fadn
 * @property HorarioAtencionCentroDeportivo[] $horarioAtencionCentroDeportivos
 * @property Institucion $institucion
 * @property Municipio $municipio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CentroDeportivo extends Model
{
    public $table = "centro_deportivo";
    static $rules = [
		'nombreCentroDeportivo' => 'required',
		'direccion' => 'required',
		'implementacion' => 'required',
		'accesibilidad' => 'required',
		'idFADN' => 'required',
		'idInstitucion' => 'required',
		'espacioFisico' => 'required',
		'idMunicipio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreCentroDeportivo','direccion','implementacion','accesibilidad','idFADN','idInstitucion','espacioFisico','idMunicipio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignacionAtletas()
    {
        return $this->hasMany('App\Models\AsignacionAtletum', 'idCentroDeportivo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entrenadorCentroDeportivos()
    {
        return $this->hasMany('App\Models\EntrenadorCentroDeportivo', 'idCentroDeportivo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fadn()
    {
        return $this->hasOne('App\Models\Fadn', 'id', 'idFADN');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarioAtencionCentroDeportivos()
    {
        return $this->hasMany('App\Models\HorarioAtencionCentroDeportivo', 'idCentroDeportivo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function institucion()
    {
        return $this->hasOne('App\Models\Institucion', 'id', 'idInstitucion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'idMunicipio');
    }
    

}
