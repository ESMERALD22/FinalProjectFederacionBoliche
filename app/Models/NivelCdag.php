<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NivelCdag
 *
 * @property $id
 * @property $nivelCDAG
 * @property $created_at
 * @property $updated_at
 *
 * @property EntrenadorCentroDeportivo[] $entrenadorCentroDeportivos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class NivelCdag extends Model
{
  public $table = "nivel_cdag";
    static $rules = [
		'nivelCDAG' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nivelCDAG'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entrenadorCentroDeportivos()
    {
        return $this->hasMany('App\Models\EntrenadorCentroDeportivo', 'idNivelCDAG', 'id');
    }
    

}
