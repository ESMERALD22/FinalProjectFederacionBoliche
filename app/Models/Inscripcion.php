<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscripcion
 *
 * @property $id
 * @property $idAtleta
 * @property $peso
 * @property $altura
 * @property $idEncargado
 * @property $fotografia
 * @property $fechaInscripcion
 * @property $created_at
 * @property $updated_at
 * @property $direccion
 * @property $idMunicipioReside
 *
 * @property AtletaDatosPersonale $atletaDatosPersonale
 * @property Encargado $encargado
 * @property Municipio $municipio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inscripcion extends Model
{
  public $table = "inscripcion";

    
    static $rules = [
		'idAtleta' => 'required',
		'peso' => 'required',
		'altura' => 'required',
		'idEncargado' => 'required',
		'fotografia' => 'required',
		'fechaInscripcion' => 'required',
		'direccion' => 'required',
		'idMunicipioReside' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idAtleta','peso','altura','idEncargado','fotografia','fechaInscripcion','direccion','idMunicipioReside'];


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
    public function encargado()
    {
        return $this->hasOne('App\Models\Encargado', 'idencargado', 'idEncargado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'idMunicipioReside');
    }
    

}
