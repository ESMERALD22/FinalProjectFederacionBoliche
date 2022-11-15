<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EntrenadorDatosPersonale
 *
 * @property $id
 * @property $cui
 * @property $nombre1
 * @property $nombre2
 * @property $apellido1
 * @property $apellido2
 * @property $apellidoDeCasada
 * @property $fechaNaciemiento
 * @property $telefonodecasa
 * @property $celular
 * @property $genero
 * @property $idMunicipio
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property AsignacionAtletum[] $asignacionAtletas
 * @property EntrenadorCentroDeportivo[] $entrenadorCentroDeportivos
 * @property Municipio $municipio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EntrenadorDatosPersonale extends Model
{
    public $table = "entrenador_datos_personales";
    static $rules = [
		'cui' => 'required',
		'nombre1' => 'required',
		'nombre2' => 'required',
		'apellido1' => 'required',
		'apellido2' => 'required',
		'apellidoDeCasada' => 'required',
		'fechaNaciemiento' => 'required',
		'telefonodecasa' => 'required',
		'celular' => 'required',
		'genero' => 'required',
		'idMunicipio' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cui','nombre1','nombre2','apellido1','apellido2','apellidoDeCasada','fechaNaciemiento','telefonodecasa','celular','genero','idMunicipio','direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignacionAtletas()
    {
        return $this->hasMany('App\Models\AsignacionAtletum', 'idEntrenador', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entrenadorCentroDeportivos()
    {
        return $this->hasMany('App\Models\EntrenadorCentroDeportivo', 'idEntrenador', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'idMunicipio');
    }
    

}
