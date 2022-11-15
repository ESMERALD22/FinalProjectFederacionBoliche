<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoAsistencium
 *
 * @property $id
 * @property $tipoAsistencia
 * @property $created_at
 * @property $updated_at
 *
 * @property ControlAsistencium[] $controlAsistencias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoAsistencium extends Model
{
  public $table = "tipo_asistencia";
    
    static $rules = [
		'tipoAsistencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoAsistencia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function controlAsistencias()
    {
        return $this->hasMany('App\Models\ControlAsistencium', 'idTipoAsistencia', 'id');
    }
    

}
