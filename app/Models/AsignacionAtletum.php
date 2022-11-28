<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AsignacionAtletum
 *
 * @property $id
 * @property $idAtleta
 * @property $idCategoria
 * @property $idPRT
 * @property $idLineaDesarrollo
 * @property $idCentroDeportivo
 * @property $idFADN
 * @property $idEtapaDeportiva
 * @property $idEntrenador
 * @property $experienciaDeportivaYears
 * @property $experienciaDeportivaMeses
 * @property $practicante
 * @property $federado
 * @property $modalidad
 * @property $adaptado
 * @property $idTipoAtleta
 * @property $created_at
 * @property $updated_at
 *
 * @property AtletaDatosPersonale $atletaDatosPersonale
 * @property Categorium $categorium
 * @property CentroDeportivo $centroDeportivo
 * @property EntrenadorDatosPersonale $entrenadorDatosPersonale
 * @property EtapaDeportiva $etapaDeportiva
 * @property Fadn $fadn
 * @property LineaDesarrollo $lineaDesarrollo
 * @property Prt $prt
 * @property TipoAtletum $tipoAtletum
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AsignacionAtletum extends Model
{
    
    static $rules = [
		'idAtleta' => 'required',
		'idCategoria' => 'required',
		'idPRT' => 'required',
		'idLineaDesarrollo' => 'required',
		'idCentroDeportivo' => 'required',
		'idFADN' => 'required',
		'idEtapaDeportiva' => 'required',
		'idEntrenador' => 'required',
		'experienciaDeportivaYears' => 'required',
		'experienciaDeportivaMeses' => 'required',
		'practicante' => 'required',
		'federado' => 'required',
		'modalidad' => 'required',
		'adaptado' => 'required',
		'idTipoAtleta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idAtleta','idCategoria','idPRT','idLineaDesarrollo','idCentroDeportivo','idFADN','idEtapaDeportiva','idEntrenador','experienciaDeportivaYears','experienciaDeportivaMeses','practicante','federado','modalidad','adaptado','idTipoAtleta'];


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
    public function categorium()
    {
        return $this->hasOne('App\Models\Categorium', 'id', 'idCategoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function centroDeportivo()
    {
        return $this->hasOne('App\Models\CentroDeportivo', 'id', 'idCentroDeportivo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function entrenadorDatosPersonale()
    {
        return $this->hasOne('App\Models\EntrenadorDatosPersonale', 'id', 'idEntrenador');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function etapaDeportiva()
    {
        return $this->hasOne('App\Models\EtapaDeportiva', 'id', 'idEtapaDeportiva');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fadn()
    {
        return $this->hasOne('App\Models\Fadn', 'id', 'idFADN');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lineaDesarrollo()
    {
        return $this->hasOne('App\Models\LineaDesarrollo', 'id', 'idLineaDesarrollo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function prt()
    {
        return $this->hasOne('App\Models\Prt', 'id', 'idPRT');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoAtletum()
    {
        return $this->hasOne('App\Models\TipoAtletum', 'id', 'idTipoAtleta');
    }
    

}
