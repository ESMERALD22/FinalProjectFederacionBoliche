<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LineaDesarrollo
 *
 * @property $id
 * @property $tipoLineaDesarrollo
 * @property $created_at
 * @property $updated_at
 *
 * @property AsignacionAtletum[] $asignacionAtletas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LineaDesarrollo extends Model
{
    public $table = "linea_desarrollo";
    static $rules = [
		'tipoLineaDesarrollo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoLineaDesarrollo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignacionAtletas()
    {
        return $this->hasMany('App\Models\AsignacionAtletum', 'idLineaDesarrollo', 'id');
    }
    

}
