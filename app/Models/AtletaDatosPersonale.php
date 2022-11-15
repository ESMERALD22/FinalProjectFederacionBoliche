<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AtletaDatosPersonale
 *
 * @property $id
 * @property $cui
 * @property $pasaporte
 * @property $NIT
 * @property $nombre1
 * @property $nombre2
 * @property $apellido1
 * @property $apellido2
 * @property $apellidoDeCasada
 * @property $fechaNaciemiento
 * @property $celular
 * @property $telefonodecasa
 * @property $genero
 * @property $idMunicipio
 * @property $direccion
 * @property $correo
 * @property $estadoCivil
 * @property $etnia
 * @property $escolaridad
 * @property $created_at
 * @property $updated_at
 *
 * @property AlergiasAtletum[] $alergiasAtletas
 * @property AsignacionAtletum[] $asignacionAtletas
 * @property ControlAsistencium[] $controlAsistencias
 * @property Inscripcion[] $inscripcions
 * @property Municipio $municipio
 * @property ReportePsicologico[] $reportePsicologicos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AtletaDatosPersonale extends Model
{
  public $table = "atleta_datos_personales";
    
    static $rules = [
		'cui' => 'required',
		'pasaporte' => 'required',
		'NIT' => 'required',
		'nombre1' => 'required',
		'nombre2' => 'required',
		'apellido1' => 'required',
		'apellido2' => 'required',
		'apellidoDeCasada' => 'required',
		'fechaNaciemiento' => 'required',
		'celular' => 'required',
		'telefonodecasa' => 'required',
		'genero' => 'required',
		'idMunicipio' => 'required',
		'direccion' => 'required',
		'correo' => 'required',
		'estadoCivil' => 'required',
		'etnia' => 'required',
		'escolaridad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cui','pasaporte','NIT','nombre1','nombre2','apellido1','apellido2','apellidoDeCasada','fechaNaciemiento','celular','telefonodecasa','genero','idMunicipio','direccion','correo','estadoCivil','etnia','escolaridad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alergiasAtletas()
    {
        return $this->hasMany('App\Models\AlergiasAtletum', 'idAtleta', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignacionAtletas()
    {
        return $this->hasMany('App\Models\AsignacionAtletum', 'idAtleta', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function controlAsistencias()
    {
        return $this->hasMany('App\Models\ControlAsistencium', 'idAtleta', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripcions()
    {
        return $this->hasMany('App\Models\Inscripcion', 'idAtleta', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'idMunicipio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reportePsicologicos()
    {
        return $this->hasMany('App\Models\ReportePsicologico', 'idAtleta', 'id');
    }
    

}
