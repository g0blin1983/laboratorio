<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Caratula
 *
 * @property $id
 * @property $caratulas
 * @property $created_at
 * @property $updated_at
 *
 * @property Archivo[] $archivos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Caratula extends Model
{
    
    static $rules = [
		'caratulas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['caratulas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function archivos()
    {
        return $this->hasMany('App\Models\Archivo', 'caratulas_id', 'id');
    }
    

}
