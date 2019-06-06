<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    //
	protected $table='ciudads';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre_ciudad'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function comunas(){
    	return $this->hasMany('App\Comuna');
    }
}
