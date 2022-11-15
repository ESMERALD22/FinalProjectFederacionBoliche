<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NivelFadn
 *
 * @property $id
 * @property $nivelFADN
 * @property $created_at
 * @property $updated_at
 *
 * @property EntrenadorCentroDeportivo[] $entrenadorCentroDeportivos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class NivelFadn extends Model
{
  public $table = "nivel_fadn";
    static $rules = [
		'nivelFADN' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nivelFADN'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entrenadorCentroDeportivos()
    {
        return $this->hasMany('App\Models\EntrenadorCentroDeportivo', 'idNivelFADN', 'id');
    }
    

}
