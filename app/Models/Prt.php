<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prt
 *
 * @property $id
 * @property $nombrePRT
 * @property $created_at
 * @property $updated_at
 *
 * @property AsignacionAtletum[] $asignacionAtletas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prt extends Model
{
  public $table = "prt";
    static $rules = [
		'nombrePRT' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombrePRT'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignacionAtletas()
    {
        return $this->hasMany('App\Models\AsignacionAtletum', 'idPRT', 'id');
    }
    

}
