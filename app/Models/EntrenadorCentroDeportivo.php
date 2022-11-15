<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EntrenadorCentroDeportivo
 *
 * @property $id
 * @property $idEntrenador
 * @property $foto
 * @property $correo
 * @property $nivelAcademico
 * @property $añosExperiencia
 * @property $idFADN
 * @property $idNivelFADN
 * @property $idCentroDeportivo
 * @property $idNivelCDAG
 * @property $idContrato
 * @property $created_at
 * @property $updated_at
 *
 * @property CentroDeportivo $centroDeportivo
 * @property Contrato $contrato
 * @property EntrenadorDatosPersonale $entrenadorDatosPersonale
 * @property Fadn $fadn
 * @property NivelCdag $nivelCdag
 * @property NivelFadn $nivelFadn
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EntrenadorCentroDeportivo extends Model
{
    public $table = "entrenador_centro_deportivo";
    static $rules = [
		'idEntrenador' => 'required',
		'foto' => 'required',
		'correo' => 'required',
		'nivelAcademico' => 'required',
		'añosExperiencia' => 'required',
		'idFADN' => 'required',
		'idNivelFADN' => 'required',
		'idCentroDeportivo' => 'required',
		'idNivelCDAG' => 'required',
		'idContrato' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEntrenador','foto','correo','nivelAcademico','añosExperiencia','idFADN','idNivelFADN','idCentroDeportivo','idNivelCDAG','idContrato'];


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
    public function contrato()
    {
        return $this->hasOne('App\Models\Contrato', 'id', 'idContrato');
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
    public function fadn()
    {
        return $this->hasOne('App\Models\Fadn', 'id', 'idFADN');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nivelCdag()
    {
        return $this->hasOne('App\Models\NivelCdag', 'id', 'idNivelCDAG');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nivelFadn()
    {
        return $this->hasOne('App\Models\NivelFadn', 'id', 'idNivelFADN');
    }
    

}
