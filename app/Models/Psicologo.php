<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Psicologo
 *
 * @property $idpsicologo
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
 * @property $direccion
 * @property $idMunicipio
 * @property $created_at
 * @property $updated_at
 *
 * @property Municipio $municipio
 * @property ReportePsicologico[] $reportePsicologicos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Psicologo extends Model
{
  public $table = "psicologo";
    
    static $rules = [
		'idpsicologo' => 'required',
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
		'direccion' => 'required',
		'idMunicipio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idpsicologo','cui','nombre1','nombre2','apellido1','apellido2','apellidoDeCasada','fechaNaciemiento','telefonodecasa','celular','genero','direccion','idMunicipio'];


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
        return $this->hasMany('App\Models\ReportePsicologico', 'idLic', 'idpsicologo');
    }
    

}
