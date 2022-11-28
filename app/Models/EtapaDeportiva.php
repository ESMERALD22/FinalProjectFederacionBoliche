<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EtapaDeportiva
 *
 * @property $id
 * @property $tipoEtapaDeportiva
 * @property $created_at
 * @property $updated_at
 *
 * @property AsignacionAtletum[] $asignacionAtletas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EtapaDeportiva extends Model
{
    public $table ='etapa_deportiva';
    static $rules = [
		'tipoEtapaDeportiva' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoEtapaDeportiva'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignacionAtletas()
    {
        return $this->hasMany('App\Models\AsignacionAtletum', 'idEtapaDeportiva', 'id');
    }
    

}
