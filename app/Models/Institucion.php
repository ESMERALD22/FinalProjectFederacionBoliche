<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Institucion
 *
 * @property $id
 * @property $tipoInstitucion
 * @property $created_at
 * @property $updated_at
 *
 * @property CentroDeportivo[] $centroDeportivos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Institucion extends Model
{
  public $table = "institucion";
    
    static $rules = [
		'tipoInstitucion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoInstitucion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function centroDeportivos()
    {
        return $this->hasMany('App\Models\CentroDeportivo', 'idInstitucion', 'id');
    }
    

}
