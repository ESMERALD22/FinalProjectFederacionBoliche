<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AlergiasAtletum
 *
 * @property $id
 * @property $idAtleta
 * @property $nombreAlergia
 * @property $created_at
 * @property $updated_at
 *
 * @property AtletaDatosPersonale $atletaDatosPersonale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AlergiasAtletum extends Model
{
  public $table = "alergias_atleta";
    
    static $rules = [
		'idAtleta' => 'required',
		'nombreAlergia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idAtleta','nombreAlergia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function atletaDatosPersonale()
    {
        return $this->hasOne('App\Models\AtletaDatosPersonale', 'id', 'idAtleta');
    }
    

}
