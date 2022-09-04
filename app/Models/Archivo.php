<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Archivo
 *
 * @property $id
 * @property $numero_archivo
 * @property $fecha_ingreso
 * @property $caratulas_id
 * @property $calles
 * @property $depedencias_id
 * @property $respuesta
 * @property $fecha_salida
 * @property $Description
 * @property $created_at
 * @property $updated_at
 *
 * @property Caratula $caratula
 * @property Dependencia $dependencia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Archivo extends Model
{
    
    static $rules = [
		'numero_archivo' => 'required',
		'fecha_ingreso' => 'required',
		'calles' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_archivo','fecha_ingreso','caratulas_id','calles','depedencias_id','respuesta','fecha_salida','Description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caratula()
    {
        return $this->hasOne('App\Models\Caratula', 'id', 'caratulas_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dependencia()
    {
        return $this->hasOne('App\Models\Dependencia', 'id', 'depedencias_id');
    }
    

}
