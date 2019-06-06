<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    //
	protected $table='comunas';
    //atributos
    //rellenar con atributos
    protected $fillable=[
    	'nombre_comuna'
    ];
    //relacion con otra tabla
    //poner nombre en plural si se relaciona con muchos
    public function calles(){
    	return $this->hasMany('App\Calle');
    }
	public function ciudads(){
    	return $this->belongTo('App\Ciudad');
    }
}
