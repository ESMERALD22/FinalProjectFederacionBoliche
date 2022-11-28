<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ficha1
 *
 * @property $id
 * @property $cuiAtleta
 * @property $pasaporte
 * @property $NIT
 * @property $nombre1A
 * @property $nombre2A
 * @property $apellido1A
 * @property $apellido2A
 * @property $apellidoDeCasadaA
 * @property $fechaNaciemientoA
 * @property $celularA
 * @property $telefonodecasaA
 * @property $generoA
 * @property $idMunicipioA
 * @property $direccionA
 * @property $correoA
 * @property $estadoCivilA
 * @property $etniaA
 * @property $escolaridadA
 * @property $fotografiaA
 * @property $cuiEncargado
 * @property $nombre1E
 * @property $nombre2E
 * @property $apellido1E
 * @property $apellido2E
 * @property $apellidoDeCasadaE
 * @property $fechaNaciemientoE
 * @property $telefonodecasaE
 * @property $celularE
 * @property $generoE
 * @property $direccionE
 * @property $pesoA
 * @property $alturaA
 * @property $created_at
 * @property $updated_at
 *
 * @property Municipio $municipio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ficha1 extends Model
{
  public $table = "ficha1";
    
    static $rules = [
		'cuiAtleta' => 'required',
		'pasaporte' => 'required',
		'NIT' => 'required',
		'nombre1A' => 'required',
		'nombre2A' => 'required',
		'apellido1A' => 'required',
		'apellido2A' => 'required',
		'apellidoDeCasadaA' => 'required',
		'fechaNaciemientoA' => 'required',
		'celularA' => 'required',
		'telefonodecasaA' => 'required',
		'generoA' => 'required',
		'idMunicipioA' => 'required',
		'direccionA' => 'required',
		'correoA' => 'required',
		'estadoCivilA' => 'required',
		'etniaA' => 'required',
		'escolaridadA' => 'required',
		'fotografiaA' => 'required',
		'cuiEncargado' => 'required',
		'nombre1E' => 'required',
		'nombre2E' => 'required',
		'apellido1E' => 'required',
		'apellido2E' => 'required',
		'apellidoDeCasadaE' => 'required',
		'fechaNaciemientoE' => 'required',
		'telefonodecasaE' => 'required',
		'celularE' => 'required',
		'generoE' => 'required',
		'direccionE' => 'required',
		'pesoA' => 'required',
		'alturaA' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cuiAtleta','pasaporte','NIT','nombre1A','nombre2A','apellido1A','apellido2A','apellidoDeCasadaA','fechaNaciemientoA','celularA','telefonodecasaA','generoA','idMunicipioA','direccionA','correoA','estadoCivilA','etniaA','escolaridadA','fotografiaA','cuiEncargado','nombre1E','nombre2E','apellido1E','apellido2E','apellidoDeCasadaE','fechaNaciemientoE','telefonodecasaE','celularE','generoE','direccionE','pesoA','alturaA'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'idMunicipioA');
    }
    

}
