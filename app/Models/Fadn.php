<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fadn
 *
 * @property $id
 * @property $nombreFADN
 * @property $created_at
 * @property $updated_at
 *
 * @property AsignacionAtletum[] $asignacionAtletas
 * @property CentroDeportivo[] $centroDeportivos
 * @property EntrenadorCentroDeportivo[] $entrenadorCentroDeportivos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Fadn extends Model
{
    public $table = "fadn";
    static $rules = [
		'nombreFADN' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreFADN'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignacionAtletas()
    {
        return $this->hasMany('App\Models\AsignacionAtletum', 'idFADN', 'id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function centroDeportivos()
    {
        return $this->hasMany('App\Models\CentroDeportivo', 'idFADN', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entrenadorCentroDeportivos()
    {
        return $this->hasMany('App\Models\EntrenadorCentroDeportivo', 'idFADN', 'id');
    }
    

}
