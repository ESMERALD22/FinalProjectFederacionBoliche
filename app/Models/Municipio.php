<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 *
 * @property $id
 * @property $municipio
 * @property $idDepartamento
 * @property $created_at
 * @property $updated_at
 *
 * @property Administrador[] $administradors
 * @property AtletaDatosPersonale[] $atletaDatosPersonales
 * @property CentroDeportivo[] $centroDeportivos
 * @property Departamento $departamento
 * @property EntrenadorDatosPersonale[] $entrenadorDatosPersonales
 * @property Inscripcion[] $inscripcions
 * @property Psicologo[] $psicologos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Municipio extends Model
{
  public $table = "municipio";
    
    static $rules = [
		'municipio' => 'required',
		'idDepartamento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['municipio','idDepartamento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administradors()
    {
        return $this->hasMany('App\Models\Administrador', 'idMunicipio', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function atletaDatosPersonales()
    {
        return $this->hasMany('App\Models\AtletaDatosPersonale', 'idMunicipio', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function centroDeportivos()
    {
        return $this->hasMany('App\Models\CentroDeportivo', 'idMunicipio', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'idDepartamento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entrenadorDatosPersonales()
    {
        return $this->hasMany('App\Models\EntrenadorDatosPersonale', 'idMunicipio', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripcions()
    {
        return $this->hasMany('App\Models\Inscripcion', 'idMunicipioReside', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function psicologos()
    {
        return $this->hasMany('App\Models\Psicologo', 'idMunicipio', 'id');
    }
    

}
