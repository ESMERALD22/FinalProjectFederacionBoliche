<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoAtletum
 *
 * @property $id
 * @property $tipoAtleta
 * @property $created_at
 * @property $updated_at
 *
 * @property AsignacionAtletum[] $asignacionAtletas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoAtletum extends Model
{
    
    static $rules = [
		'tipoAtleta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoAtleta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignacionAtletas()
    {
        return $this->hasMany('App\Models\AsignacionAtletum', 'idTipoAtleta', 'id');
    }
    

}
