<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
<<<<<<< HEAD
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
=======
	protected $table = 'comunas';
    protected $fillable = ['nombre'];

    public function calles_comunas()
    {
    	return $this->hasMany('App\Calle_Comuna');
    }

    public function ciudades()
    {
    	return $this->belongsTo('App\Ciudad');
>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    }
}
