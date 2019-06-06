<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
<<<<<<< HEAD
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
=======
    protected $table = 'ciudades';
    protected $fillable = ['nombre'];

    public function comunas()
    {
>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    	return $this->hasMany('App\Comuna');
    }
}
