<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Encargado
 *
 * @property $idencargado
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
 * @property $created_at
 * @property $updated_at
 *
 * @property Inscripcion[] $inscripcions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Encargado extends Model
{
  public $table = "encargado";
    
    static $rules = [
		'idencargado' => 'required',
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
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idencargado','cui','nombre1','nombre2','apellido1','apellido2','apellidoDeCasada','fechaNaciemiento','telefonodecasa','celular','genero','direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripcions()
    {
        return $this->hasMany('App\Models\Inscripcion', 'idEncargado', 'idencargado');
    }
    

}
